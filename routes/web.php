<?php

use App\Models\User;
use App\Models\Story;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\WriteValidation;
use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'index'])->name('write.index');

Route::get('/publish', function () {
    return view('publish');
})->name('write.publish');

Route::get('/{id}', function ($id) {
    return view('single', ['story' => Story::findOrFail($id)]);
})->name('write.show');

Route::get('/{id}/edit', function ($id) {
    return view('edit', ['story' => Story::findOrFail($id)]);
})->name('write.edit');

Route::POST('/publish', function (WriteValidation $request) {
    $story = Story::create($request->validated());
    return redirect()->route('write.show', ['id' => $story->id]);
})->name('write.store');

Route::PUT('/{id}', function ($id, WriteValidation $request) {
    $story = Story::findOrFail($id);
    $story->update($request->validated());
    return redirect()->route('write.show', ['id' => $story->id]);
})->name('write.update');

Route::DELETE('/{id}', function ($id, Story $story) {
    $story = Story::findOrFail($id);
    $story->delete();
    return redirect()->route('write.index');
})->name('write.destroy');


