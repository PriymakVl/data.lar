<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    public function quotes()
    {

    	$quotes = Quote::orderBy('rating', 'desc')->paginate(5);
    	return view('quote.quotes.base', compact('quotes'));
    }

    public function index($id)
    {
    	$quote = Quote::find($id);
    	return view('quote.index.base', compact('quote'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('quote.add.base');
        $quote = Quote::create($request->all());
        if ($quote) return redirect()->route('quote', ['id' => $quote->id])->with('success', 'Цитата успешно добавлен');
        return redirect('quotes')->with('error', 'Ошибка при добавлении цитата');
    }

    public function edit(Request $request)
    {
        $quote = Quote::find($request->id);
        if ($request->isMethod('post')) return $this->update($request, $quote);
        return view('quote.edit.base', compact('quote'));
    }

    private  function update($request, $quote)
    {
        $quote->update($request->all());
        return redirect()->route('quote', ['id' => $quote->id])->with('success', 'Цитата  успешно отредактирована');
    }

    public function delete($id)
    {
        if (Quote::destroy($id)) return redirect('quotes')->with('success', 'Цитата успешно удалена');
        return redirect()->back()->with('error', 'Ошибка при удалении цитаты');
    }

    public function rating(Request $request)
    {
        $this->validate($request, ['rating' => 'integer']);
        Quote::where('id', $request->input('id_item'))->update(['rating' => $request->input('rating')]);
        return redirect()->back()->with('success', 'Рейтинг цитаты успешно изменен');
    }

    public function file(Request $request)
    {
        if($request->isMethod('post')) return $this->uploadFile($request);
        return view('quote.file.base');
    }

    private function uploadFile($request)
    {
        dd($request);
        if(!$request->hasFile('quotes')) return redirect()->back()->with('error', 'Ошибка при загрузке файла с цитатами');
        $count = Quote::addQuotesFromFile($request);
        debug($count);
        $messages = "Загружено {$count} цитаты";
        return redirect()->route('quotes')->with('success', $messages);
    }
}
