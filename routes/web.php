<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/aboutChurch', function () {
    return view('aboutChurch');
})->name('aboutChurch');

Route::get('/aboutPastor', function () {
    return view('aboutPastor');
})->name('aboutPastor');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/test', function () {
    $topArticles = App\Article::take(2)->latest()->get();
    $sideArticles = App\Article::skip(2)->take(3)->latest()->get();
    return view('test', compact('topArticles', 'sideArticles'));
})->name('test');
