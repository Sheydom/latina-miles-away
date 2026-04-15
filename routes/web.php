<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('thankyou', 'thankyou')->name('thankyou');

Route::prefix('legal')->group(function () {
    Route::view('terms', 'legal.terms')->name('legal.terms');
    Route::view('refunds', 'legal.refunds')->name('legal.refunds');
    Route::view('privacy', 'legal.privacy')->name('legal.privacy');
    Route::view('disclaimer', 'legal.disclaimer')->name('legal.disclaimer');
});

Route::prefix('services')->group(function () {
    Route::view('guidanceSession', 'services.guidanceSession')->name('services.guidanceSession');
    Route::view('startHere', 'services.startHere')->name('services.startHere');
    Route::view('accomodationGuide', 'services.accomodationGuide')->name('services.accomodationGuide');
    Route::view('resumeReview', 'services.resumeReview')->name('services.resumeReview');
    Route::view('documentReview', 'services.documentReview')->name('services.documentReview');
    Route::view('workReadiness', 'services.workReadiness')->name('services.workReadiness');

});

Route::get('/lang/{locale}', function ($locale) {

    if (! in_array($locale, ['en', 'es'])) {
        abort(400);
    }

    session(['locale' => $locale]);

    return redirect()->to((url())->previous());

})->name('lang.switch');

Route::get('/sitemap.xml', function () {
    Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/contact'))
        ->add(Url::create('/services/startHere'))
        ->add(Url::create('/services/accomodationGuide'))
        ->add(Url::create('/services/resumeReview'))
        ->add(Url::create('/services/documentReview'))
        ->add(Url::create('/services/guidanceSession'))
        ->add(Url::create('/services/workReadiness'))
        ->add(Url::create('/legal/privacy'))
        ->add(Url::create('/legal/terms'))
        ->add(Url::create('/legal/refunds'))
        ->add(Url::create('/legal/disclaimer'))
        ->writeToFile(public_path('sitemap.xml'))
        ->add(Url::create('/downloads/checklist7days-web.pdf'))
        ->add(Url::create('/downloads/rentGuide26.pdf'))
        ->add(Url::create('/downloads/encontrarTrabajoGuide-web.pdf'));

    return response()->file(public_path('sitemap.xml'));
});
