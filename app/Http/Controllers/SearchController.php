<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Maintext;

class SearchController extends Controller
{
   public function postIndex(){
	$all = Maintext::where('name','LIKE','%'.$_POST['main_search'].'%')->get();
	$all_body = Maintext::where('body','LIKE','%'.$_POST['main_search'].'%')->get();
	return view('search')->with('all',$all);
   } 
}
