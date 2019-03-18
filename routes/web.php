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

//public side methods invocation
Route::get('/', 'Public_Controller@home')->name('home');

Route::get('/parking', 'Public_Controller@parking')->name('parking');

Route::get('/universidad', 'Public_Controller@parkingU')->name('parkingU');

Route::get('/parqueadero', 'Public_Controller@parkingLot')->name('parkingLot');

Route::get('/favoritos', 'Public_Controller@fav')->name('fav');

//private side methods invocation
Route::get('/fav', 'Private_controller@fav')->name('favP');

Route::get('/historial', 'Private_controller@history')->name('history');

Route::get('/Mi cuenta', 'Private_controller@settings')->name('acountSettings');

Route::get('/Mis vehiculos', 'Private_controller@vehicles')->name('vehicles');

Route::get('/Vehiculo', 'Private_controller@vehicleEdit')->name('vehicleEdit');

Route::get('/Añadir vehiculo', 'Private_controller@vehicleAdd')->name('vehicleAdd');

//Employees side methods invocation
Route::get('/seleccion', 'Employees_controller@selection')->name('selection');

Route::get('/zonaLaboral', 'Employees_controller@place')->name('place');

Route::get('/busqueda', 'Employees_controller@search')->name('search');

Route::get('/vehiculos', 'Employees_controller@vehiclesIn')->name('vehiclesIn');

//Admin side methods invocation
Route::get('/listas', 'Admin_controller@listSelection')->name('listSelection');

Route::get('/universidades', 'Admin_controller@uList')->name('uList');

Route::get('/administrar universidad', 'Admin_controller@adminU')->name('adminU');

Route::get('/datos de universidad', 'Admin_controller@uSettings')->name('uSettings');

Route::get('/parqueaderos', 'Admin_controller@uLots')->name('uLots');

Route::get('/datos de parqueadero', 'Admin_controller@lotSettings')->name('lotSettings');

Route::get('/nuevo parqueadero', 'Admin_controller@lotAdd')->name('lotAdd');
