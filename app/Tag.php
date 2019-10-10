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
}
