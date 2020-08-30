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

Route::get('/', 'MusicController@index');
Route::get('/techmodel', 'TechModelController@index');
Route::post('/upload', 'TechModelController@save');
Route::view('/form', 'userform');