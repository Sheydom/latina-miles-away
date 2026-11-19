<?php

use App\Http\Controllers\PageController;
use App\Support\Localization;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
| Every page exists twice:
|   Spanish (main):  /contact     (route name "contact")
|   English:         /en/contact  (route name "en.contact")
| The URL decides the language (see App\Http\Middleware\SetLocale), so Google
| can index both versions. In views, use lroute('contact') to link to the page
| in the current language.
*/
$pages = function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::view('contact', 'contact')->name('contact');
    Route::view('thankyou', 'thankyou')->name('thankyou');

    Route::prefix('legal')->name('legal.')->group(function () {
        Route::view('terms', 'legal.terms')->name('terms');
        Route::view('refunds', 'legal.refunds')->name('refunds');
        Route::view('privacy', 'legal.privacy')->name('privacy');
        Route::view('disclaimer', 'legal.disclaimer')->name('disclaimer');
    });

    Route::prefix('services')->name('services.')->group(function () {
        Route::view('guidanceSession', 'services.guidanceSession')->name('guidanceSession');
        Route::view('startHere', 'services.startHere')->name('startHere');
        Route::view('accomodationGuide', 'services.accomodationGuide')->name('accomodationGuide');
        Route::view('resumeReview', 'services.resumeReview')->name('resumeReview');
        Route::view('documentReview', 'services.documentReview')->name('documentReview');
        Route::view('workReadiness', 'services.workReadiness')->name('workReadiness');
    });
};

Route::group([], $pages);
Route::prefix(Localization::PREFIXED)->name(Localization::PREFIXED.'.')->group($pages);

/*
| Language switch: remembers the choice and opens the same page in the
| other language.
*/
Route::get('/lang/{locale}', function (string $locale) {
    if (! in_array($locale, Localization::LOCALES, true)) {
        abort(400);
    }

    session(['locale' => $locale]);

    return redirect()->to(Localization::urlFor(url()->previous(), $locale));
})->name('lang.switch');
