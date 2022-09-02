<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;


Route::group(['middleware' => 'web'], function () {
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
});
Route::get('/users', [UsuariosController::class, 'index'])->middleware('auth');
Route::get('/users/new', [UsuariosController::class, 'createPage'])->middleware('auth');
Route::post('/users/create', [UsuariosController::class, 'store'])->middleware('auth');
Route::get('/users/edit/{id}', [UsuariosController::class, 'edit'])->middleware('auth');
Route::put('/users/update/{id}', [UsuariosController::class, 'update'])->middleware('auth');
Route::delete('/users/delete/{id}', [UsuariosController::class, 'destroy'])->middleware('auth');
