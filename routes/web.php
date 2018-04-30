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

Route::get('/', 'CountryController@index');

Route::post('/publish', 'CountryController@store');

Route::get('/country/{country}', 'CountryController@showCities');

Route::post('/country/{country}/city', 'CityController@addCity');

Route::get('/country/{country}/delete', 'CountryController@countryDelete');

Route::get('/country/{country}/{city}/delete', 'CountryController@cityDelete');

Route::get('/country/{country}/search', 'CountryController@countrySearch');