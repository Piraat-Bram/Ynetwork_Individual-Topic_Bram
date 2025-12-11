<?php

use Illuminate\Support\Facades\Route;

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    // also set a cookie so clients without persistent sessions still remember locale
    return redirect()->back()->withCookie(cookie('locale', $locale, 120));
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

