<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function categories()
    {
    	$cats = Category::where('parent_id', 0)->orderBy('name')->paginate(5);
    	return view('category.categories.base', compact('cats'));
    }

    public function index(Request $request, $id)
    {
    	$cat = Category::find($id);
    	return view('category.index.base', compact('cat'));
    }

     public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('category.add.base');
        $request->validate(['name' => 'string|max:255']);
        $cat = Category::create($request->all());
        if ($cat) return redirect()->route('cat', ['id' => $cat->id])->with('success', 'Категория успешно добавлена');
        return redirect('cats')->with('error', 'Ошибка при добавлении категории');
    }

    public function edit(Request $request)
    {
        $cat = Category::find($request->id);
        if ($request->isMethod('post')) return $this->update($request, $cat);
        return view('category.edit.base', compact('cat'));
    }

    private function update($request, $book)
    {
        $cat->update($request->all());
        return redirect()->route('cat', ['id' => $cat->id])->with('success', 'Категория успешно отредактирована');
    }

    public function delete($id)
    {
        if (Category::destroy($id)) return redirect('books')->with('success', 'Категория успешно удалена');
        return redirect()->back()->with('error', 'Ошибка при удалении категории');
    }
}
