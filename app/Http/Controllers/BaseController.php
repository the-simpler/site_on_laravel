<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

use App\Http\Requests;


class BaseController extends Controller
{
public function getIndex()
{
    $news=Products::where('showhide', 'show')->get();
	$title='Main page';
	return view('Index')->with('title',$title)->with('news', $news);
}

}
