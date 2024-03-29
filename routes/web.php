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

Route::get('/canvas', function () {
    return view('canvas');
})->name('canvas');

Route::post('/test', 'TestController@test')->name('test');
Route::get('/form', 'TestController@displayForm');
