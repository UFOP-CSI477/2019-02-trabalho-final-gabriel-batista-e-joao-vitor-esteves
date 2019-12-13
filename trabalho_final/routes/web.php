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
use App\Http\Controllers\TimeController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\SumulaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/times','TimeController@mostrar')->middleware('auth');
Route::get('/criar', 'TimeController@create')->middleware('auth');
Route::post('/criar', 'TimeController@store')->middleware('auth');
Route::get('/jogos', 'EventoController@show')->middleware('auth');
Route::post('/registrar','EventoController@store')->middleware('auth');
Route::get('/registrar', 'EventoController@create')->middleware('auth');
Route::post('/jogos/{id}', 'SumulaController@store')->middleware('auth');
Route::get('/visualizar', 'SumulaController@view')->middleware('auth');
Route::post('/teste/{id}', 'SumulaController@update')->middleware('auth');


Route::resource('sumula','SumulaController',['except'=>['post']])->parameters(['index'=>'id']);

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


