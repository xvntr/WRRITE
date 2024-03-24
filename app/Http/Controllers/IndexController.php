<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Fetch the latest stories and paginate them
        $stories = Story::latest()->paginate(9);

        // Return the homepage view with the stories
        return view('homepage', ['story' => $stories]);
    }
}