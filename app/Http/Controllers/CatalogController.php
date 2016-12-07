<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;

use App\Http\Requests;

class CatalogController extends Controller
{

   public function getAll($id=null){
   		$cat=Catalog::where('id',$id)->first();
		return view('all')->with('cat',$cat);
   } //
}


