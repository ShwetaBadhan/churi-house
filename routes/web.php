<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactLeadController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('frontend.pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
})->name('about-us');

Route::get('/locations', function () {
    return view('frontend.pages.locations');
})->name('locations');

Route::get('/our-menu', function () {
    return view('frontend.pages.our-menu');
})->name('our-menu');

Route::get('/our-gallery', function () {
    return view('frontend.pages.our-gallery');
})->name('our-gallery');

Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
})->name('contact-us');

Route::get('/privacy-policy', function () {
    return view('frontend.pages.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-conditions', function () {
    return view('frontend.pages.terms-conditions');
})->name('terms-conditions');

Route::get('/reserve-a-table', function () {
    return view('frontend.pages.reservation');
})->name('reserve-a-table');


// form active 
Route::post('/contact-us/store', [ContactLeadController::class, 'store'])->name('contact-us.store');
Route::post('/reserve-a-table/store', [ReservationController::class, 'store'])->name('reserve-a-table.store');