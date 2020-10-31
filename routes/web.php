<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::POST('webhook', 'App\Http\Controllers\WebhookController@handle');
Route::get('mailing', 'App\Http\Controllers\AdminController@mailing');
Route::get('ingreso-comprador', 'App\Http\Controllers\AdminController@loginComprador');
Route::post('login', 'App\Http\Controllers\AdminController@login');
Route::get('login', 'App\Http\Controllers\AdminController@login')->name('login');
Route::post('/registro-eventmovil', 'App\Http\Controllers\AdminController@RegistroEventMovil')->name('RegistroEventMovil');
