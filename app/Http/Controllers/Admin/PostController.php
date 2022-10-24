<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Post;

class PostController extends Controller
{
   
    public function index()
    {
        // $posts = Post::all();
        return view('admin.post.index');
    }

   
    public function create()
    {
        return view('admin.post.create');
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        // $post = Post::findOrFail($id);
        return view('admin.post.edit', ['post' => $post]);
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
