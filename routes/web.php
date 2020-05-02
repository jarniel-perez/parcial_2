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

Route::get('/hospital_store', 'HospitalController@store');
Route::get('/hospital_index', 'HospitalController@index');
Route::get('/hospital_update', 'HospitalController@update');
Route::get('/hospital_update_2', 'HospitalController@update_2');
Route::get('/hospital_destroy', 'HospitalController@destroy');
Route::get('/hospital_destroy_2', 'HospitalController@destroy_2');

Route::get('/medico_store', 'MedicoController@store');
Route::get('/medico_store_2', 'MedicoController@store_2');
Route::get('/medico_store_3', 'MedicoController@store_3');
Route::get('/medico_index', 'MedicoController@index');
Route::get('/medico_update', 'MedicoController@update');
Route::get('/medico_update_2', 'MedicoController@update_2');
Route::get('/medico_destroy', 'MedicoController@destroy');
Route::get('/medico_destroy_2', 'MedicoController@destroy_2');
Route::get('/medico_relacionar', 'MedicoController@relacionar');
Route::get('/medico_update_morfica', 'MedicoController@update_morfica');
Route::get('/medico_destroy_morfica', 'MedicoController@destroy_morfica');
