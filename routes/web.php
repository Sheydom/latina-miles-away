<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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



