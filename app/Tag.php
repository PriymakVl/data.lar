<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Quote;
use App\QuoteTag;

class Tag extends Model
{
    use SoftDeletes;

	protected $table = 'tags';
    protected $fillable = ['name', 'cat_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category', 'cat_id', 'id');
    }

    public function quotes()
    {
        return $this->belongsToMany(Quote::class);
    }

    public function indexing()
    {
    	$ids = $this->getIds();
    	if (!$ids) return;
    	$ids_exist = QuoteTag::where('tag_id', $this->id)->pluck('id')->toArray();
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
    		if (mb_stripos($quote->text, $needle) !== false) $ids[] = $quote->id;
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
