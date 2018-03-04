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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil', 'ProfilController@create')->name('profil');
Route::get('/compte', 'CompteController@create')->name('compte');
Route::get('/flux', 'FluxController@create')->name('flux');
Route::get('/search', 'SearchController@create')->name('search');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/legale',function () {
    return view('legale');
})->name('legale');

Route::get('/cgv',function () {
    return view('cgv');
})->name('cgv');


