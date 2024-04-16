<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RequesterController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DriverController;

Route::get('/', [RequesterController::class, 'index'])->name('index');
Route::get('/ocurrences/create', [RequesterController::class, 'create']);
Route::get('/ocurrences/applicants', [RequesterController::class, 'applicants']);
Route::get('/ocurrences/createapplicants', [RequesterController::class, 'createapplicants']);
Route::post('/ocurrences/createapplicants', [RequesterController::class, 'store'])->name('solicitacoes.store');
Route::get('/ocurrences/car', [RequesterController::class, 'car']);
Route::post('/', [RequesterController::class, 'store'])->name('solicitacoes.store');


// Materials
Route::get('/ocurrences/creatematerials', [MaterialController::class, 'create']);
Route::get('/ocurrences/materials', [MaterialController::class, 'index']);
Route::post('/ocurrences/materials', [MaterialController::class, 'store']);

// Drivers
Route::get('/ocurrences/createdrivers', [DriverController::class, 'create']);
Route::get('/ocurrences/drivers', [DriverController::class, 'index']);
Route::post('/ocurrences/drivers', [DriverController::class, 'store']);

