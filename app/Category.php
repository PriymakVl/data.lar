<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;

    protected $table = 'categories';
    protected $fillable = ['name', 'parent_id'];
    public $parent;
    public $tags;

    public function getParentAttribute()
    {
    	if ($this->parent_id) return $this->parent = self::where('parent_id', $this->parent_id);
    }

    public function tags()
    {
    	// return $this->hasMany('App\Tags', 'cat_id');
    	return App\Tags::where('cat_id', $this->id)->get();
    }
}
