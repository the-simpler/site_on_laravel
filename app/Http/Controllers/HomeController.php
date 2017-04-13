<?php

namespace App\Http\Controllers;

use Auth;
use App\Categories;
use App\Products;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\CreateProductsRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=Categories::where('showhide', 'show')->get();
        $products = Products::with("user")->with("categories")->get();
        return view('home')->with('cats',$cats);
    }
     public function postIndex(CreateProductsRequest $request)
    {

        $request = $this->saveFiles($request);
        $request['user_id']=Auth::user()->id;
        $request['showhide']='show';

        Products::create($request->all());
        return redirect('home');
    }
}

