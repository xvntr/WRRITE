<?php

use App\Models\User;
use App\Models\Story;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage', ['story' => Story::paginate(9)]);
})->name('write.index');

Route::get('/{id}', function ($id) {
    return view('single-story', ['story' => Story::findOrFail($id)]);
})->name('write.show');
