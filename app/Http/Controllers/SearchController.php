<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Maintext;

class SearchController extends Controller
{
   public function postIndex(){
	$all = Products::where('name','LIKE','%'.$_POST['main_search'].'%')->get();
	$all_body = Products::where('body','LIKE','%'.$_POST['main_search'].'%')->get();
	return view('search')->with('all',$all);
   } 
}
