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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil', 'ProfilController@index')->name('profil');
Route::get('/compte', 'CompteController@index')->name('compte');
Route::get('/flux', 'FluxController@index')->name('flux');
Route::get('/search', 'SearchController@index')->name('search');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@send');

Route::get('/img/profil/{id}', 'ImageController@profilPicture')->name('imageProfile');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/legale',function () {
    return view('legale');
})->name('legale');

Route::get('/cgv',function () {
    return view('cgv');
})->name('cgv');


