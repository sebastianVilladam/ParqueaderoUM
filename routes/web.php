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

//private side methods invocation
Route::group(['middleware' => 'standarUser'], function()
{
  Route::get('/favoritos', 'Private_Controller@fav')->name('fav');

  Route::get('/fav', 'Private_controller@favP')->name('favP');

  Route::get('/historial', 'Private_controller@history')->name('history');

  Route::get('/Mi cuenta', 'Private_controller@settings')->name('acountSettings');

  Route::get('/Mis vehiculos', 'Private_controller@vehicles')->name('vehicles');

  Route::get('/Vehiculo', 'Private_controller@vehicleEdit')->name('vehicleEdit');

  Route::get('/Añadir vehiculo', 'Private_controller@vehicleAdd')->name('vehicleAdd');
});

//Employees side methods invocation
Route::group(['middleware' => 'watchmanUser'], function()
{
  Route::get('/seleccion', 'Employees_controller@selection')->name('selection');

  Route::get('/zonaLaboral', 'Employees_controller@place')->name('place');

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
  Route::get('/vigilantes', 'Admin_controller@uEmployees')->name('uEmployees');

  Route::get('/datos del empleado', 'Admin_controller@emSettings')->name('emSettings');

  Route::get('/nuevo vigilante', 'Admin_controller@emAdd')->name('emAdd');
});

Route::get('/error', ['as' => 'public.errorWindow', function() {
    return view('public.errorWindow');
}]);
