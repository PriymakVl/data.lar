<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'parent_id'];
    public $parent;
    public $tags;

    public function getParentAttribute()
    {
    	if ($this->parent_id) return $this->parent = self::where('parent_id', $this->parent_id);
    }
}
