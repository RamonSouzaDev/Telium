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

Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});

Route::get('clientes', [App\Http\Controllers\ClientesController::class, 'index']);
Route::get('clientes/create', [App\Http\Controllers\ClientesController::class, 'create']);
Route::post('clientes/add', [App\Http\Controllers\ClientesController::class, 'add']);
Route::get('clientes/{id}/edit', [App\Http\Controllers\ClientesController::class, 'edit']);
Route::post('clientes/update/{id}', [App\Http\Controllers\ClientesController::class, 'update']);
Route::delete('clientes/delete/{id}', [App\Http\Controllers\ClientesController::class, 'delete']);

