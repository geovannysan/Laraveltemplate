<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Geovanny;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Simarduno;
use App\Http\Controllers\GpsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
Route::get('/', function () {
    return view('welcome');
});
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/principal', 'Geovanny@index');
Route::resource('categorias','CategoriaController');
Route::resource('sim','Simarduino');
Route::resource('sim.gps','GpsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
