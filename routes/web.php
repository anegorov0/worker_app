<?php

use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [WorkerController::class, 'index'])->name('workers.index');

Route::get('/workers/create', [WorkerController::class, 'create'])->name('workers.create');

Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('workers.show');

Route::post('/workers/', [WorkerController::class, 'store'])->name('workers.store');

Route::get('/workers/{worker}/edit', [WorkerController::class, 'edit'])->name('workers.edit');

Route::patch('/workers/{worker}', [WorkerController::class, 'update'])->name('workers.update');

Route::delete('/workers/{worker}', [WorkerController::class, 'delete'])->name('workers.delete');


