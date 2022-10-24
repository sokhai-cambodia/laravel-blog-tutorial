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
        // step 1: validate data is valid
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        // dd($validated, $request->all());
     
        // step 2: write logic for save to database
        // insert into 
        // Model::create($validated);
        $category = new Category();
        $category->name = $request->name;
        // $category->field1 = $request->name;
        $category->save();

        // step 3: redirect or response end user
        // redirect to route
        return redirect()->route('admin.category.index');
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        
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
