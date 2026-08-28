<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::view('/about-us', 'pages.about-us')->name('about');
Route::view('/contact-us', 'pages.contact-us')->name('contact');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy');
Route::view('/terms-and-conditions', 'pages.terms-and-conditions')->name('terms');
Route::view('/disclaimer', 'pages.disclaimer')->name('disclaimer');

Route::get('/sitemap.xml', function () {
    return response()
        ->view('sitemap')
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
Route::get('/sitemap_tools.xml', function () {
    return response()
        ->view('sitemap')
        ->header('Content-Type', 'application/xml');
})->name('sitemap_tools');

Route::get('/{slug}', function ($slug) {
    $tool = collect(config('tools'))
        ->firstWhere('slug', $slug);
    abort_unless($tool, 404);
    return view('tools.' . $tool['slug']);
})->where('slug', '[a-z0-9-]+')->name('tool');
