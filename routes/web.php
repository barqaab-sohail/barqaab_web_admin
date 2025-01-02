<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projectlist', [HomeController::class, 'project'])->name('project');
Route::get('/management', [HomeController::class, 'management'])->name('management');
Route::get('/services', [HomeController::class, 'services'])->name('services');