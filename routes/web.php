<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\IndexController')->name('index');
Route::get('/create', 'App\Http\Controllers\CreateController')->name('create');
Route::post('/', 'App\Http\Controllers\StoreController')->name('store');

