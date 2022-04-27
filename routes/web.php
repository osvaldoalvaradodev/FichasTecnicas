<?php

use Illuminate\Support\Facades\Route;

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
});

//rutas de paises
Route::get('/countries','CountryController@list');
Route::get('/countries/create','CountryController@create');
Route::post('/countries/create/process','CountryController@process');

Route::get('/countries/{country_id}','CountryController@details');
Route::get('/countries/{country_id}/edit','CountryController@edit');
Route::post('/countries/{country_id}/edit/process','CountryController@editProcess');
Route::get('/countries/{country_id}/delete','CountryController@delete');