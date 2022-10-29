<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{
    public function index(Request $request) {
        // page = 2, limit= 10
        $posts = Post::when($request->category_id, function ($query, $category_id) {
            $query->where('category_id', $category_id);
        })
        ->when($request->search, function ($query, $search) {
            $query->where('title', 'LIKE', '%'.$search.'%');
        })
        ->when($request->tag_id, function ($query, $tag_id) {
            $query->whereHas('tags', function ($sub_query) use($tag_id) {
                $sub_query->where('id', $tag_id);
            });
        })
        ->paginate(8)
        ->withQueryString();
        
        return view('index', ['posts' => $posts]);
    }

    public function article(Request $request, $id) {
        $post = Post::findOrFail($id);
        return view('article', ['post' => $post]);
    }
}
