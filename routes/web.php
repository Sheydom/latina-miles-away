<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::prefix('legal')->group(function () {
    Route::view('terms', 'legal.terms')->name('legal.terms');
    Route::view('refunds', 'legal.refunds')->name('legal.refunds');
    Route::view('privacy', 'legal.privacy')->name('legal.privacy');
    Route::view('disclaimer', 'legal.disclaimer')->name('legal.disclaimer');
});
Route::view('contact','contact')->name('contact');