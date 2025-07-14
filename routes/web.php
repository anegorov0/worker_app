<?php

use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [WorkerController::class, 'index']);

Route::get('/workers/show', [WorkerController::class, 'show']);

