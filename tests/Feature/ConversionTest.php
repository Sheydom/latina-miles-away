<?php

test('booking buttons show duration, price and the free guides option', function () {
    $this->get('/')
        ->assertSee('Reserva tu consulta')
        ->assertSee(config('site.consultation.minutes').' min · '.config('site.consultation.price'))
        ->assertSee('Descarga las guías gratis')
        ->assertSee('data-cal-link="'.config('site.consultation.cal_link').'"', false);

    $this->get('/en')
        ->assertSee('Book your consultation')
        ->assertSee('Get the free guides')
        ->assertSee('href="'.url('/en/services/startHere').'"', false);
});

test('WhatsApp buttons are hidden without a number', function () {
    config(['site.whatsapp' => '']);

    $this->get('/')->assertDontSee('wa.me', false);
});

test('WhatsApp buttons use the number and a message in the page language', function () {
    config(['site.whatsapp' => '+61 412 345 678']);

    $this->get('/')
        ->assertSee('https://wa.me/61412345678?text='.rawurlencode('Hola Sheyla, encontré Latina Miles Away y tengo una pregunta:'), false);

    $this->get('/en/contact')
        ->assertSee('https://wa.me/61412345678?text='.rawurlencode('Hi Sheyla, I found Latina Miles Away and I have a question:'), false);
});

test('testimonials section is hidden while there are none', function () {
    $this->get('/')->assertDontSee('testimonials-title', false);
});

test('testimonials section shows the items', function () {
    app('translator')->addLines([
        'testimonials.items' => [['quote' => 'Test quote', 'name' => 'Ana', 'detail' => 'Perú']],
    ], 'es');

    $this->get('/')
        ->assertSee('testimonials-title', false)
        ->assertSee('Test quote')
        ->assertSee('Ana');
});

test('free services carry a Free / Gratis badge', function () {
    $badge = '#bg-tertiary[^"]*">\s*%s\s*</span>#';

    expect($this->get('/')->getContent())->toMatch(sprintf($badge, 'Gratis'));
    expect($this->get('/en')->assertDontSee('Start Here — Free')->getContent())->toMatch(sprintf($badge, 'Free'));
});

test('FAQ shows in both languages with valid structured data', function () {
    foreach (['/' => '¿Eres agente de migración?', '/en' => 'Are you a migration agent?'] as $path => $question) {
        $html = $this->get($path)->assertSee($question)->getContent();

        preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $m);
        $faq = collect($m[1])->map(fn ($json) => json_decode($json, true))->firstWhere('@type', 'FAQPage');

        expect($faq)->not->toBeNull()
            ->and($faq['mainEntity'][0]['name'])->toBe($question)
            ->and(collect($faq['mainEntity'])->pluck('acceptedAnswer.text')->implode(' '))
            ->toContain(config('site.consultation.price'))
            ->not->toContain(':minutes')
            ->not->toContain('<a');
    }
});

test('English pages say the PDFs are in Spanish', function () {
    $this->get('/en/services/startHere')->assertSee('Download PDF (in Spanish)');
    $this->get('/en/services/accomodationGuide')->assertSee('Download Full Guide (in Spanish)');
});

test('privacy policy discloses Google Analytics', function () {
    $this->get('/legal/privacy')->assertSee('Google Analytics');
    $this->get('/en/legal/privacy')->assertSee('Google Analytics');
});
