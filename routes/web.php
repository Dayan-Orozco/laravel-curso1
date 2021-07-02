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

/**Vista del home principal */
Route::get('/', function () {
    return view('welcome');
})->name('Home');

/**home 2  
Route::get('/home', function () {
    return view('welcome');
})->name('home');
*/

//Url de tareas
Route::get('/tareas', 'TaskController@index')->middleware('auth');
Route::post('/tareas', 'TaskController@store')->middleware('auth')->name('tareas.store');
Route::post('/tareas/[id]', 'TaskController@eliminar')->middleware('auth');

Auth::routes();
/** si se valida el login de un usario me envia al Dashboard */
Route::get('/home', 
    [App\Http\Controllers\HomeController::class, 'index']
)->name('Dashboard');
