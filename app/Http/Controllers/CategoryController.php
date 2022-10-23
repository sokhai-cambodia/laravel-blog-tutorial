<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('admin.category.index');
    }

    public function create() {
        return view('admin.category.create');
    }

    public function edit($id) {
        // dd('edit cateogry', $id);
        return view('admin.category.edit');
    }
}
