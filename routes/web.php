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
    return view('auth/login');
});

Route ::get('temperatura/temperatura','TemperaturaController@muestraHistorico');
Route ::resource('temperatura/temperatura','TemperaturaController');


Auth::routes();

Route::auth();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
