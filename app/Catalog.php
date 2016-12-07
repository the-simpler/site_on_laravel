<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
   public function articles(){

   		return $this->hasMany('app\Articles');
   } //
}
