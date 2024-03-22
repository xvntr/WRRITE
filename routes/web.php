<?php

use App\Models\Story;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(
        'homepage',
        ['stories' => Story::all()]
    );
});