<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticController extends Controller
{
    public function getIndex($id=null){
    	return view('static')->with('id', $id);
    }
}
