<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\RaceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/pets',[ PetController::class,'index']);
Route::post('/pets',[ PetController::class,'store']);
Route::delete('/pets/{id}',[ PetController::class,'destroy']);
Route::get('/pets/{id}',[ PetController::class,'show']); //listar apenas um item da classe
Route::put('/pets/{id}',[ PetController::class,'update']);


Route::post('races',[ RaceController::class,'store']);
Route::get('races',[ RaceController::class,'index']);
