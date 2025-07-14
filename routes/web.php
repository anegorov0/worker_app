<?php

use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [WorkerController::class, 'index'])->name('worker.index');

Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('worker.show');
/*
Route::get('/workers/create', [WorkerController::class, 'create'])->name('worker.create');

Route::get('/workers/update', [WorkerController::class, 'update'])->name('worker.update');

Route::get('/workers/delete', [WorkerController::class, 'delete'])->name('worker.delete');*/


