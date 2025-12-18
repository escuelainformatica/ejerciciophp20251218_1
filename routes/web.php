<?php

use App\Http\Controllers\PaisController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/producto',[ProductoController::class,"tabla"]);
Route::get('/pais',[PaisController::class,"tabla"]);