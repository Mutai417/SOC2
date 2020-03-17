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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services');
});


Route::resource('contact','contactController');
Route::resource('newsletter','newsletterController');
Route::get('blog', function () {
    return view('blog');
});

Route::get('single', function () {
    return view('single');
});

