<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
   
	public function{
		return $this->belongeTo('App\Catalog');

	}
    protected $fillable = [
        'name',
        'url',
        'user_id', 
        'category_id',
        'picture',
    ];
}
