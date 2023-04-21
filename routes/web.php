<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\mainController::class,'home']);
Route::get('/catigories',[\App\Http\Controllers\mainController::class,'catigories']);

Route::get('/product/{product?}',[\App\Http\Controllers\mainController::class,'product']);
Route::get('/{category?}',[\App\Http\Controllers\mainController::class,'category']);


