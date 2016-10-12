<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class BaseController extends Controller
{
public function getIndex()
{
	$title='Название сайта';
	return view('Index')->with('title',$title);
}

}
