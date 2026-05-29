<?php

use Illuminate\Support\Facades\Route;

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
