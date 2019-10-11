<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = 'tags';
    protected $fillable = ['name', 'cat_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category', 'cat_id', 'id');
    }

    public function indexing()
    {
    	$ids = $this->getIds();
    	dd($ids);
    	if (!$ids) return;
    	$ids_exist = QuoteTag::find('quote_id')->where('tag_id', $this->id)->asarray()->get();
    	dd($ids_exist);
    	$ids_exist = $ids_
    	$ids_new = array_diff($ids, $ids_exist);
    	$this->addIndex($ids_new);
    }

    private function getIds()
    {
    	$quotes = Quote::get();
    	if (!$quotes) return false;
    	$ids = [];
    	$needle = $this->preparationForIndexing();
    	foreach ($quotes as $quote) {
    		if (mb_stripos($quote->text, $needle)) $ids[] = $quote->id;
    	}
    	return $ids;
    }

    private function preparationForIndexing()
    {
    	return $this->name;
    }

    private function addIndex($ids)
    {
    	foreach ($ids as $id) {
    		$data = ['quote_id' => $id, 'tag_id' => $this->id];
    		QuoteTag::create($data);
    	}
    }
}
