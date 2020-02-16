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

Route::get('/','PageController@welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gallery','PageController@gallery');

Route::get('/info','PageController@info');

Route::get('/search','PageController@search');

Route::get('/card/{id}','PageController@card');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Maker

// YUGIOH
Route::get('/yugioh-creator','CreatorController@yugioh');

Route::get('/yugioh-anime','CreatorController@yugioh_anime');

// POKEMON
Route::get('/pokemon-gx','CreatorController@pokemongx');

// function
Route::post('/publish','FunctionController@publish');

