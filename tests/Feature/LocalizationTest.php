<?php

$pages = [
    '/', '/contact', '/thankyou',
    '/legal/terms', '/legal/refunds', '/legal/privacy', '/legal/disclaimer',
    '/services/guidanceSession', '/services/startHere', '/services/accomodationGuide',
    '/services/resumeReview', '/services/documentReview', '/services/workReadiness',
];

test('every page works in English', function (string $path) {
    $this->get($path)
        ->assertOk()
        ->assertSee('<html lang="en"', false);
})->with($pages);

test('every page works in Spanish under /es', function (string $path) {
    $esPath = $path === '/' ? '/es' : '/es'.$path;

    $this->get($esPath)
        ->assertOk()
        ->assertSee('<html lang="es"', false)
        ->assertSee('hreflang="en" href="'.url($path).'"', false)
        ->assertSee('hreflang="es" href="'.url($esPath).'"', false);
})->with($pages);

test('links on Spanish pages stay in Spanish', function () {
    $this->get('/es/contact')
        ->assertSee('href="'.url('/es/legal/privacy').'"', false)
        ->assertDontSee('href="'.url('/legal/privacy').'"', false);
});

test('language switch opens the same page in the other language', function () {
    $this->from('/services/startHere')->get('/lang/es')
        ->assertRedirect(url('/es/services/startHere'));

    $this->from('/es/contact')->get('/lang/en')
        ->assertRedirect(url('/contact'));
});

test('a remembered Spanish choice redirects English URLs', function () {
    $this->withSession(['locale' => 'es'])->get('/contact')
        ->assertRedirect(url('/es/contact'));
});

test('language switch ignores other sites as referer', function () {
    $this->from('https://example.org/page')->get('/lang/es')
        ->assertRedirect(url('/es'));
});

test('unknown language is rejected', function () {
    $this->get('/lang/fr')->assertStatus(400);
});
