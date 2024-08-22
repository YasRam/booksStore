<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function all(){
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    function add()
    {
        return view('categories.add');
    }

    function store(Request $request)
    {
        // dd($request->desc);
        $request->validate([
            'name' => 'required|string|min:5',
            'desc' => 'required|string|min:5'
        ]);


        Category::create([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect()->route('categories.all');
    }

    function update(Category $category) {
        return view('categories.update',compact('category'));
    }

    function edit(Category $category,Request $request) {
        $category->update([
            'name'=>$request->name,
            'desc'=>$request->desc
        ]);
        return redirect()->route('categories.all');
    }

    function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.all');
    }
}
