<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TaskController::class, 'index']); //controlador vista
Route::post('/', [TaskController::class, 'store']); //controlador post