<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Requests\WriteValidation;

class IndexController extends Controller
{
    public function index()
    {
        // Fetch the latest stories and paginate them
        $stories = Story::latest()->paginate(9);

        // Return the homepage view with the stories
        return view('homepage', ['story' => $stories]);
    }

    public function publish()
    {
        return view('publish');
    }

    public function show($id)
    {
        $story = Story::findOrFail($id);
        return view('single', ['story' => $story]);
    }

    public function edit($id)
    {
        $story = Story::findOrFail($id);
        return view('edit', ['story' => $story]);
    }

    public function store(WriteValidation $request)
    {
        $story = Story::create($request->validated());
        return redirect()->route('write.show', ['id' => $story->id]);
    }

    public function update($id, WriteValidation $request)
    {
        $story = Story::findOrFail($id);
        $story->update($request->validated());
        return redirect()->route('write.show', ['id' => $story->id]);
    }

    public function destroy($id)
    {
        $story = Story::findOrFail($id);
        $story->delete();
        return redirect()->route('write.index');
    }
}
