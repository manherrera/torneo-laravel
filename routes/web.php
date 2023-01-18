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


	//Roles y Permisos
	Route::resource('roles', App\Http\Controllers\RolController::class);
	Route::resource('users', App\Http\Controllers\UserController::class);
	
	//Genenarción de PDF
	Route::get('participante/pdf', 'App\Http\Controllers\ParticipanteController@pdf')->name('participante.pdf');
	Route::get('participante/pdf2', 'App\Http\Controllers\ParticipanteController@pdf2')->name('participante.pdf2');
	Route::get('ronda1pelea/pdf', 'App\Http\Controllers\Ronda1peleaController@pdf')->name('ronda1pelea.pdf');
	Route::get('ronda2pelea/pdf', 'App\Http\Controllers\Ronda2peleaController@pdf')->name('ronda2pelea.pdf');
	Route::get('ronda3pelea/pdf', 'App\Http\Controllers\Ronda3peleaController@pdf')->name('ronda3pelea.pdf');
	Route::get('ronda4pelea/pdf', 'App\Http\Controllers\Ronda4peleaController@pdf')->name('ronda4pelea.pdf');
	Route::get('ronda5pelea/pdf', 'App\Http\Controllers\Ronda5peleaController@pdf')->name('ronda5pelea.pdf');

	Route::get('gallo1/pdf', 'App\Http\Controllers\Gallo1Controller@pdf')->name('gallo1.pdf');
	Route::get('gallo2/pdf', 'App\Http\Controllers\Gallo2Controller@pdf')->name('gallo2.pdf');
	Route::get('gallo3/pdf', 'App\Http\Controllers\Gallo3Controller@pdf')->name('gallo3.pdf');
	Route::get('gallo4/pdf', 'App\Http\Controllers\Gallo4Controller@pdf')->name('gallo4.pdf');
	Route::get('gallo5/pdf', 'App\Http\Controllers\Gallo5Controller@pdf')->name('gallo5.pdf');

	Route::get('equipo/pdf', 'App\Http\Controllers\EquipoController@pdf')->name('equipo.pdf');

});

	//Registro de partcipantes
	Route::resource('participantes', App\Http\Controllers\ParticipanteController::class)->middleware('auth');
	Route::resource('puntajes', App\Http\Controllers\PuntajeController::class)->middleware('auth');

	//Clasificaciones
	Route::resource('equipos', App\Http\Controllers\EquipoController::class)->middleware('auth');
	Route::resource('gallos1', App\Http\Controllers\Gallo1Controller::class)->middleware('auth');
	Route::resource('gallos2', App\Http\Controllers\Gallo2Controller::class)->middleware('auth');
	Route::resource('gallos3', App\Http\Controllers\Gallo3Controller::class)->middleware('auth');
	Route::resource('gallos4', App\Http\Controllers\Gallo4Controller::class)->middleware('auth');
	Route::resource('gallos5', App\Http\Controllers\Gallo5Controller::class)->middleware('auth');
	
	//Rondas de peleas
	Route::resource('ronda1peleas', App\Http\Controllers\Ronda1peleaController::class)->middleware('auth');
	Route::resource('ronda2peleas', App\Http\Controllers\Ronda2peleaController::class)->middleware('auth');
	Route::resource('ronda3peleas', App\Http\Controllers\Ronda3peleaController::class)->middleware('auth');
	Route::resource('ronda4peleas', App\Http\Controllers\Ronda4peleaController::class)->middleware('auth');
	Route::resource('ronda5peleas', App\Http\Controllers\Ronda5peleaController::class)->middleware('auth');