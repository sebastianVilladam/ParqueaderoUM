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
    return view('public.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'public_Controller@home')->name('home');

Route::get('/parking', 'public_Controller@parking')->name('parking');

Route::get('/universidad', 'public_Controller@parkingU')->name('parkingU');

Route::get('/parqueadero', 'public_Controller@parkingLot')->name('parkingLot');

Route::get('/favoritos', 'public_Controller@fav')->name('fav');
