<?php

use App\Models\User;
use App\Models\Story;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\WriteValidation;
use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'index'])->name('write.index');
Route::get('/publish', [IndexController::class, 'publish'])->name('write.publish');
Route::get('/{id}', [IndexController::class, 'show'])->name('write.show');
Route::get('/{id}/edit', [IndexController::class, 'edit'])->name('write.edit');

Route::post('/publish', [IndexController::class, 'store'])->name('write.store');
Route::put('/{id}', [IndexController::class, 'update'])->name('write.update');
Route::delete('/{id}', [IndexController::class, 'destroy'])->name('write.destroy');


