<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RequesterController;

Route::get('/', [RequesterController::class, 'index']);
Route::get('/ocurrences/create', [RequesterController::class, 'create']);
Route::get('/ocurrences/applicants', [RequesterController::class, 'applicants']);
Route::get('/ocurrences/createapplicants', [RequesterController::class, 'createapplicants']);
Route::get('/ocurrences/materials', [RequesterController::class, 'materials']);
Route::get('/ocurrences/driver', [RequesterController::class, 'driver']);
Route::get('/ocurrences/car', [RequesterController::class, 'car']);