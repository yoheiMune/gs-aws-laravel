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
    return view('welcome');
});

Route::get('/books', 'BookController@index');
Route::get('/photos', 'PhotoController@index');
Route::post('/photos', 'PhotoController@store')->name('photo.store');

// ヘルスチェック.
Route::get('/health_check', 'HealthCheckController@check');
