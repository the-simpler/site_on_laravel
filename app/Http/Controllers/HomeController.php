<?php

namespace App\Http\Controllers;

use Auth;
use App\Catalog;
use App\Articles;
use App\Http\Requests\ArticleRequest;
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
        $cats=Catalog::where('showhide', 'show')->get();
        return view('home')->with('cats',$cats);
    }
     public function postIndex(ArticleRequest $r)
    {   
       
        $r['url']='-';
        $pic=\App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'], '/media/photos/');
        $r['picture']=$pic;
        $r['user_id']=Auth::user()->id;
        Articles::create($r->all());
        return redirect('home');
    }
}

