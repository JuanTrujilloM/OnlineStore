<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Forma 1 definicion de rutas
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

// Forma 2 Definicion de rutas con controlador
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

