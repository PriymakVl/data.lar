<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
     public function tags()
    {
    	$tags = Tag::orderBy('name')->paginate(5);
    	return view('tag.tags.base', compact('tags'));
    }

    public function index($id)
    {
    	$tag = Tag::find($id);
    	return view('tag.index.base', compact('tag'));
    }

     public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('tag.add.base');
        $this->validate($request, ['name' => 'required|string|max:255', 'cat_id' => 'integer']);
        return $this->saveTag($request);
    }  

    private function saveTag($request)
    {
         $tag = Tag::where('name', trim($request->name))->first();
        if ($tag) return redirect()->route('tag', ['id' => $tag->id])->with('error', 'Такой тег уже сущестует');
        $tag = Tag::create($request->all());
        if ($tag) return redirect()->route('tag', ['id' => $tag->id])->with('success', 'Тег успешно добавлен');
        return redirect()->route('tags')->with('error', 'Ошибка при добавлении тега');
    }

    public function edit(Request $request)
    {
        $tag = Tag::find($request->id);
        if ($request->isMethod('post')) return $this->update($request, $tag);
        return view('tag.edit.base', compact('tag'));
    }

    private function update($request, $tag)
    {
        $tag->update($request->all());
        return redirect()->route('tag', ['id' => $tag->id])->with('success', 'Тег успешно отредактирован');
    }

    public function delete($id)
    {
        if (Tag::destroy($id)) return redirect()->route('tags')->with('success', 'Тег успешно удален');
        return redirect()->back()->with('error', 'Ошибка при удалении тега');
    }

    public function indexing($id)
    {
        $tag = (Tag::find($id));
        $tag->indexing();
        return redirect()->back()->with('success', 'Индексация тега произведена');
    }
}
