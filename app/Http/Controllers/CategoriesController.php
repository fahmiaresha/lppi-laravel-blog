<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index(){

        $categories = Categories::all();
    
        return view('category', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new Categories();
        $category->category_name = $request->category_name;
        $category->save();

        return redirect('/category')->with('success', 'Category created successfully!');
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
        $category = Categories::find($id);
        $category->category_name = $request->category_name;
        $category->save();

        return redirect('/category')->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();

        return redirect('/category')->with('success', 'category deleted successfully!');
    }
}
