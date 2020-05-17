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

// Titre

Route::get('/viewTitre', 'TitreController@index')->name('viewTitre');
Route::get('/addTitre', "TitreController@create")->name('addTitre');
Route::post("/saveTitre", "TitreController@store")->name("saveTitre");
Route::get('/editTitre/{id}', "TitreController@edit")->name("editTitre");
Route::post('/updateTitre/{id}', "TitreController@update")->name("updateTitre");
Route::get("/deleteTitre/{id}", "TitreController@destroy")->name("deleteTitre");