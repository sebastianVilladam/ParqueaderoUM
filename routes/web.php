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

Route::get('/', 'Public_Controller@home')->name('home');

Route::get('/parking', 'Public_Controller@parking')->name('parking');

Route::get('/universidad', 'Public_Controller@parkingU')->name('parkingU');

Route::get('/parqueadero', 'Public_Controller@parkingLot')->name('parkingLot');

Route::get('/favoritos', 'Public_Controller@fav')->name('fav');

Route::get('/fav', 'Private_controller@fav')->name('favP');

Route::get('/Mi cuenta', 'Private_controller@settings')->name('acountSettings');

Route::get('/seleccion', 'Employees_controller@selection')->name('selection');
