<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();
        return view('admin.tag.index', ['tags' => $tags]);
    }

    public function create() {
        return view('admin.tag.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        // write logic for save to database
        // insert into 
        $tag = new Tag();
        $tag->name = $request->name;
        // $tag->field1 = $request->name;
        $tag->save();

        // redirect to route
        return redirect()->route('admin.tag.index');
    }

    public function edit($id) {
        $tag = Tag::findOrFail($id);
        return view('admin.tag.edit', ['tag' => $tag]);
    }

    public function update(Request $request, $id) {
        $tag = Tag::findOrFail($id);
        $tag->name = $request->name;
        $tag->save();

        // redirect to route
        return redirect()->route('admin.tag.index');
    }

    public function destroy(Request $request, $id) {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        // redirect to route
        return redirect()->route('admin.tag.index');
    }
}
