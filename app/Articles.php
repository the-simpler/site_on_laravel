<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
   
	public function catalogs(){
		return $this->belongeTo('App\Catalog');

	}
    protected $fillable = [
        'name',
        'url',
        'body',
        'user_id', 
        'category_id',
        'picture',
    ];
}
