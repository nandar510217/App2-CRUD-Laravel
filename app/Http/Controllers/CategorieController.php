<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //show categories
    //read categories
    public function index() {
        $categories = Categories::all();
        return view('categories.index', compact('categories'));
    }

    //create categories
    public function create() {
        return view('categories.create');
    }

    public function store(Request $request) {
        Categories::create([
            'name' => $request->name
        ]);
        return redirect('categories');
    }

    //edit categories
    public function edit($id) {
        $category = Categories::find($id);
        return view('categories.edit', compact('category'));
    }

    //update categories
    public function update(Request $request, $id) {
        // dd($request->all());
        $category = Categories::find($id);
        $category->update([
            'name' => $request->name, // corrected the syntax error (changed '->' to '->')
        ]);
    
        return redirect('categories');
    }


    //delete categories
    public function delete($id) {
        $category = Categories::findOrfail($id);
        $category->delete();
        return redirect('categories');
    }
    
}
