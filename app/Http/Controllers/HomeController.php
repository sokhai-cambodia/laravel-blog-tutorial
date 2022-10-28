<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        // page = 2, limit= 10
        $posts = Post::paginate(8);
        return view('index', ['posts' => $posts]);
    }
}