<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstrategiaController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/estrategias', [EstrategiaController::class, 'index']);
Route::get('/profesores', [ProfesoresController::class, 'index']);
Route::get('/materias', [MateriasController::class, 'index']);
Route::get('/estrategias/{id}', [EstrategiaController::class, 'show']);
Route::post('/estrategias/store', [EstrategiaController::class, 'store']);
