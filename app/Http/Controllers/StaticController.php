<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Maintext;

class StaticController extends Controller
{
    public function getIndex($id=null){
    $product= Products::where('id', $id)->first();
    return view('static')->with('product', $product);	
    }
}
