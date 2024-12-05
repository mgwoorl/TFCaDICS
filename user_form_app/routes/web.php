<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;

Route::get('/', [FormController::class, 'index']);
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'store']);
Route::get('/data', [AdminController::class, 'index']);