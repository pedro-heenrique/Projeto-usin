<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RequesterController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CarController;

Route::get('/', [RequesterController::class, 'index'])->name('index');
Route::get('/ocurrences/applicants', [RequesterController::class, 'applicants']);
Route::get('/ocurrences/createapplicants', [RequesterController::class, 'createapplicants']);
Route::post('/ocurrences/createapplicants', [RequesterController::class, 'store'])->name('solicitacoes.store');
Route::post('/', [RequesterController::class, 'store'])->name('solicitacoes.store');


// Materials
Route::get('/ocurrences/creatematerials', [MaterialController::class, 'create']);
Route::get('/ocurrences/materials', [MaterialController::class, 'index']);
Route::post('/ocurrences/materials', [MaterialController::class, 'store']);

// Drivers
Route::get('/ocurrences/createdrivers', [DriverController::class, 'create']);
Route::get('/ocurrences/drivers', [DriverController::class, 'index']);
Route::post('/ocurrences/drivers', [DriverController::class, 'store']);

// Cars
Route::get('/ocurrences/createcars', [CarController::class, 'create']);
Route::get('/ocurrences/cars', [CarController::class, 'index']);
Route::post('/ocurrences/cars', [CarController::class, 'store']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
