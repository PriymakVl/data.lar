<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Route;
use App\Quote;
use App\QuoteTag;

class QuoteController extends Controller
{
    public function quotes()
    {   
        $limit = 8;
    	$quotes = Quote::orderBy('rating', 'desc')->paginate($limit);
        // $file_empty = (filesize('temp/quotes.txt') == 0) ? true : false;
        $file_empty = true;
    	return view('quote.quotes.base', compact('quotes', 'limit', 'file_empty'));
    }

    public function index($id)
    {
    	$quote = Quote::find($id);
    	return view('quote.index.base', compact('quote'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('quote.add.base');
        $quote = Quote::where('text', trim($request->text))->first();
        if ($quote) return redirect()->route('quote', ['id' => $quote->id])->with('error', 'Такая цитата уже существует');
        $quote = Quote::create($request->all());
        if (!$quote) redirect('quotes')->with('error', 'Ошибка при добавлении цитата');
        // if ($request->tag_id) QuoteTeg::add($request->tag_id, $quote->id);
        return redirect()->route('quote', ['id' => $quote->id])->with('success', 'Цитата успешно добавлен');
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
        if ($request->tag_id) QuoteTag::add($request->tag_id, $request->id);
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
        if(!$request->hasFile('quotes')) return redirect()->back()->with('error', 'Ошибка при загрузке файла с цитатами');
        $qty = Quote::addQuotesFromFile($request);
        $messages = "Загружено {$qty} цитаты";
        return redirect()->route('quotes')->with('success', $messages);
    }

    public function write()
    {
        $quotes = Quote::get();
        if (!$quotes) exit('not quotes');
        header('HTTP/1.1 200 OK');
        header("Content-Description: file transfer");
        header("Content-transfer-encoding: binary");
        header('Content-Disposition: attachment; filename="quotes.txt"');
         
        foreach ($quotes as $quote) {
            echo trim($quote->text), PHP_EOL;
        }
    }

    public function download_file()
    {
        header('HTTP/1.1 200 OK');
        header("Content-Description: file transfer");
        header("Content-transfer-encoding: binary");
        header('Content-Disposition: attachment; filename="quotes.txt"');
        if ($fh = fopen('temp/quotes.txt', 'rb')) {
            while (!feof($fh)) print fread($fh, 1024);
        }
        fclose($fh);
    }

    public function input_file(Request $request, $search)
    {
        $quotes = Quote::where('text', 'like', "%{$search}%")->get();
        if (!$quotes) return redirect()->back()->with('error', 'Нет цитат для добавления');
        foreach ($quotes as $quote) {
            $text = $quote->text.PHP_EOL;
            file_put_contents('temp/quotes.txt', $text, FILE_APPEND);
        }
        return redirect()->back()->with('success', 'Цитаты добавлены в файл');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $quotes = Quote::where('text', 'like', "%{$search}%")->get();
        if ($quotes->isEmpty()) return redirect()->back()->with('error', 'Цитат не найдено');
        else if ($quotes->count() == 1) return redirect()->route('quote', ['id' => $quotes[0]->id])->with('success', 'Цитата успешно найдена');
        return view('quote.search.base', compact('quotes', 'search'))->with('success', 'Найдено несколько цитат');
    }
}
