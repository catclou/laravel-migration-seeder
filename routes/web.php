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

// Rotte statiche
Route::get('/', 'PageController@index')->name('home');
Route::get('/about-us', 'PageController@aboutUs')->name('aboutUs');
Route::get('/contacts', 'PageController@contacts')->name('contacts');

// Rotte per la gestione dei treni
Route::get('/trains', 'TrainController@index')->name('trains');
// Route::get('/trains/{id}', 'TrainController@show')->name('trains');
