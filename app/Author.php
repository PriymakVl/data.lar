<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
	use SoftDeletes;

    protected $table = 'authors';
    protected $fillable = ['first_name', 'last_name', 'middle_name', 'date_birth'];

    public function books()
    {
    	return $this->hasMany('App\Book');
    }

    public function getFullNameAttribute() {
    	return "{$this->last_name} {$this->first_name} {$this->middle_name}";
	}

    public function getShortNameAttribute()
    {
        return "{$this->last_name} {$this->first_name}";
    }

}
