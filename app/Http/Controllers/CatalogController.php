<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Catalog;
use Illuminate\Http\Request;

use App\Http\Requests;


class CatalogController extends Controller
{

   public function getAll($id=null){
   		$cat=Catalog::where('id',$id)->first();
   		$news=Articles::where('category_id', $id)
   						->orderBy('id','DESC')
   						->paginate(10);
		return view('all')->with('cat',$cat)->with('news',$news);
   } //
}


