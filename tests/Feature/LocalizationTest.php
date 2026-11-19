<?php

// Spanish is the main language at "/...", English lives at "/en/...".

$pages = [
    '/', '/contact', '/thankyou',
    '/legal/terms', '/legal/refunds', '/legal/privacy', '/legal/disclaimer',
    '/services/guidanceSession', '/services/startHere', '/services/accomodationGuide',
    '/services/resumeReview', '/services/documentReview', '/services/workReadiness',
];

test('every page works in Spanish (main language)', function (string $path) {
    $this->get($path)
        ->assertOk()
        ->assertSee('<html lang="es"', false);
})->with($pages);

test('every page works in English under /en', function (string $path) {
    $enPath = $path === '/' ? '/en' : '/en'.$path;

    $this->get($enPath)
        ->assertOk()
        ->assertSee('<html lang="en"', false)
        ->assertSee('hreflang="es" href="'.url($path).'"', false)
        ->assertSee('hreflang="en" href="'.url($enPath).'"', false)
        ->assertSee('hreflang="x-default" href="'.url($path).'"', false);
})->with($pages);

test('links on English pages stay in English', function () {
    $this->get('/en/contact')
        ->assertSee('href="'.url('/en/legal/privacy').'"', false)
        ->assertDontSee('href="'.url('/legal/privacy').'"', false);
});

test('language switch opens the same page in the other language', function () {
    $this->from('/services/startHere')->get('/lang/en')
        ->assertRedirect(url('/en/services/startHere'));

    $this->from('/en/contact')->get('/lang/es')
        ->assertRedirect(url('/contact'));
});

test('a remembered English choice redirects Spanish URLs', function () {
    $this->withSession(['locale' => 'en'])->get('/contact')
        ->assertRedirect(url('/en/contact'));
});

test('language switch ignores other sites as referer', function () {
    $this->from('https://example.org/page')->get('/lang/en')
        ->assertRedirect(url('/en'));
});

test('unknown language is rejected', function () {
    $this->get('/lang/fr')->assertStatus(400);
});
