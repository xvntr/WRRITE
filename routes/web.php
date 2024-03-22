<?php

use App\Http\Requests\WriteValidation;
use App\Models\User;
use App\Models\Story;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage', ['story' => Story::latest()->paginate(9)]);
})->name('write.index');

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
    $story = Story::create($request->validated());
    return redirect()->route('write.show', ['id' => $story->id]);
})->name('write.update');

