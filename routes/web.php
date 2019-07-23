<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/discount', function () {
    return view('discount');
});