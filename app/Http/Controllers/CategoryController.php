<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
    	$cats = Category::orderBy('name')->paginate(5);
    	dd($cats);
    	return view('category.categories.base', compact('cats'));
    }

    public function index(Request $request, $id)
    {
    	$cat = Category::find($id);
    	return view('category.index.base', compact('cat'));
    }
}
