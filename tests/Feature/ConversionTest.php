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
