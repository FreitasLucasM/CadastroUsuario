<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;


Route::group(['middleware' => 'web'], function () {
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
});
Route::get('/users', [UsuariosController::class, 'index']);
Route::get('/users/new', [UsuariosController::class, 'createPage']);
Route::post('/users/create', [UsuariosController::class, 'store']);
Route::get('/users/edit/{id}', [UsuariosController::class, 'edit']);
Route::put('/users/update/{id}', [UsuariosController::class, 'update']);
Route::delete('/users/delete/{id}', [UsuariosController::class, 'destroy']);
