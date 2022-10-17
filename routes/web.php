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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	//Navbar and Sidebar
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

	//Registro de partcipantes
	Route::resource('gallos', App\Http\Controllers\GalloController::class)->middleware('auth');
	Route::resource('equipos', App\Http\Controllers\EquipoController::class)->middleware('auth');
	
	//Genenarción de PDF
	Route::get('equipo/pdf', 'App\Http\Controllers\EquipoController@pdf')->name('equipo.pdf');
	Route::get('gallo/pdf', 'App\Http\Controllers\GalloController@pdf')->name('gallo.pdf');
	Route::get('ronda1pelea/pdf', 'App\Http\Controllers\Ronda1peleaController@pdf')->name('ronda1pelea.pdf');
	Route::get('ronda2pelea/pdf', 'App\Http\Controllers\Ronda2peleaController@pdf')->name('ronda2pelea.pdf');

	//Rondas de peleas
	Route::resource('ronda1peleas', App\Http\Controllers\Ronda1peleaController::class)->middleware('auth');
	Route::resource('ronda2peleas', App\Http\Controllers\Ronda2peleaController::class)->middleware('auth');

