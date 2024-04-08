<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RequesterController;

Route::get('/', [RequesterController::class, 'index']);
Route::get('/ocurrences/create', [RequesterController::class, 'create']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
