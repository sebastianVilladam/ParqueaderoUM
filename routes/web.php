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

Route::get('/universidad/{id}', 'Public_Controller@parkingU')->name('parkingU');

Route::get('/parqueadero/{id}', 'Public_Controller@parkingLot')->name('parkingLot');

//private side methods invocation
Route::group(['middleware' => 'standarUser'], function()
{
  Route::get('/favoritos/{id}', 'Private_Controller@fav')->name('fav');

  Route::get('/fav/{id}', 'Private_controller@favP')->name('favP');

  Route::get('/favorito/{id}', 'Private_controller@destroy')->name('favPDelete');

  Route::get('/favP/{id}', 'Public_controller@destroy')->name('favPDP');

  Route::post('/nuevo favorito', 'Private_Controller@store')->name('favAdd');

  Route::get('/historial', 'Private_controller@history')->name('history');

  Route::get('/mi cuenta/{id}', 'UserController@edit')->name('acountSettings');

  Route::put('/mi cuenta/{id}', 'UserController@update')->name('acountSettings');

  Route::get('/mis vehiculos/{id}', 'VehicleController@index')->name('vehicles');

  Route::get('{u_id}/registrar vehiculo', 'VehicleController@create')->name('veAddForm');

  Route::post('/registrar vehiculo', 'VehicleController@store')->name('veAdd');

  Route::get('/datos de mi vehiculo/{id}', 'VehicleController@edit')->name('veSettings');

  Route::put('/datos de mi vehiculo/{id}', 'VehicleController@update')->name('veSettings');

  Route::delete('/mi vehiculo/{id}', 'VehicleController@destroy')->name('veDelete');
});

//Employees side methods invocation
Route::group(['middleware' => 'watchmanUser'], function()
{
  Route::get('/seleccion/{id}', 'Employees_controller@selection')->name('selection');

  Route::get('/zonaLaboral/{id}', 'Employees_controller@place')->name('place');

  Route::post('/registro', 'Employees_controller@addParking')->name('addParking');

  Route::get('/busqueda', 'Employees_controller@search')->name('search');

  Route::get('/vehiculos', 'Employees_controller@vehiclesIn')->name('vehiclesIn');
});

//Admin side methods invocation
Route::group(['middleware' => 'adminUser'], function()
{
  Route::get('/listas', 'Admin_controller@listSelection')->name('listSelection');

  Route::get('/universidades', 'UniversityController@index')->name('uList');

  Route::get('/nueva universidad', 'UniversityController@create')->name('uniAdd');

  Route::post('/nueva universidad', 'UniversityController@store')->name('uniAdd');

  Route::get('/administrar universidad/{id}', 'UniversityController@show')->name('adminU');

  Route::get('/datos de universidad/{id}', 'UniversityController@edit')->name('uSettings');

  Route::put('/datos de universidad/{id}', 'UniversityController@update')->name('uSettings');

  Route::delete('/universidad/{id}', 'UniversityController@destroy')->name('uDelete');

//------------------------------------------------------------------------------
  Route::get('/parqueaderos/{u_id}', 'ParkingLotController@index')->name('uLots');

  Route::get('{u_id}/nuevo parqueadero', 'ParkingLotController@create')->name('lotAddForm');

  Route::post('/nuevo parqueadero', 'ParkingLotController@store')->name('lotAdd');

  Route::get('/datos de parqueadero/{id}', 'ParkingLotController@edit')->name('lotSettings');

  Route::put('/datos de parqueadero/{id}', 'ParkingLotController@update')->name('lotSettings');

  Route::delete('/parqueadero/{id}', 'ParkingLotController@destroy')->name('parkDelete');

//------------------------------------------------------------------------------
  Route::get('/vigilantes/{id}', 'WatchmanController@index')->name('uEmployees');

  Route::get('/nuevo vigilante/{id}', 'WatchmanController@create')->name('emAddForm');

  Route::post('/nuevo vigilante', 'WatchmanController@store')->name('emAdd');

  Route::get('/datos del empleado/{id}', 'WatchmanController@edit')->name('emSettings');

  Route::put('/datos del empleado/{id}', 'WatchmanController@update')->name('emSettings');

  Route::delete('/empleado/{id}', 'WatchmanController@destroy')->name('emDelete');

//------------------------------------------------------------------------------
  Route::get('/usuarios', 'UserController@index')->name('users');

  Route::get('/nuevo usuario', 'UserController@create')->name('userAddForm');

  Route::post('/nuevo usuario', 'UserController@store')->name('userAdd');

  Route::get('/datos del usuario/{id}', 'UserController@edit')->name('userSettings');

  Route::put('/datos del usuario/{id}', 'UserController@update')->name('userSettings');

  Route::delete('/empleado/{id}', 'UserController@destroy')->name('userDelete');

//------------------------------------------------------------------------------
  Route::get('/vehiculos/{id}', 'VehicleController@index')->name('userVehicles');

  Route::get('{u_id}/nuevo vehiculo', 'VehicleController@create')->name('vehicleAddForm');

  Route::post('/nuevo vehiculo', 'VehicleController@store')->name('vehicleAdd');

  Route::get('/datos de vehiculo/{id}', 'VehicleController@edit')->name('vehicleSettings');

  Route::put('/datos de vehiculo/{id}', 'VehicleController@update')->name('vehicleSettings');

  Route::delete('/vehiculo/{id}', 'VehicleController@destroy')->name('vehicleDelete');
});

Route::get('/error', ['as' => 'public.errorWindow', function() {
    return view('public.errorWindow');
}]);
