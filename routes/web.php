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

// CORS
header('Access-Control-Allow-Origin: *');

Route::get('/', 'ContactController@index');

Route::post('/api/store', [
   'as' => '/api/store', 'uses' => 'ContactController@store'
]);

