<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        // write logic for save to database
        // insert into 
        $category = new Category();
        $category->name = $request->name;
        // $category->field1 = $request->name;
        $category->save();

        // redirect to route
        return redirect()->route('admin.category.index');
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();

        // redirect to route
        return redirect()->route('admin.category.index');
    }

    public function destroy(Request $request, $id) {
        $category = Category::findOrFail($id);
        $category->delete();

        // redirect to route
        return redirect()->route('admin.category.index');
    }
}
