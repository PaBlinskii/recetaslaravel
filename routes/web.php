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

Route::get('/recetas', 'RecetaController');


// Route::get('/nosotros', 'RecetaController'); // Usando __invoke
// Route::get('/nosotros', 'RecetasController@hola');
// Route::get('/nosotros',[RecetaController::class, 'hola']); // En Laravel 8
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
