<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('project');
Route::get('/management', [HomeController::class, 'management'])->name('management');
Route::get('/services', [HomeController::class, 'services'])->name('services');