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
}
