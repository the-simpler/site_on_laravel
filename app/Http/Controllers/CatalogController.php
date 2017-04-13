<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

use App\Http\Requests;


class CatalogController extends Controller
{

   public function getAll($id=null){
   		$cat=Categories::where('id',$id)->first();
   		$news=Products::where('categories_id', $id)
   						->orderBy('id','DESC')
   						->paginate(10);

		return view('all')->with('cat',$cat)->with('news',$news);
   } //
}


