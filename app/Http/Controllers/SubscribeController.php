<?php


namespace App\Http\Controllers;
use App\Subscriptions;
use App\Categories;
use Auth;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function postIndex(){
        $str='';
        foreach($_POST as $key => $value){
            $id = (int)$key;
            if ($id>0){
                $str .=$id.',';
            }
        }
    $obj= new Subscriptions();
        $obj->body=$str;
        if (Auth::guest()){
            $obj->user_id=0;
        }else{
            $obj->user_id=Auth::user()->id;
        }

        $obj->email=$_POST['email'];
        $obj->url=$_SERVER['REMOTE_ADDR'];
        $obj->save();
        return view('subscribe')->with('obj',$obj);
    } //
    public function getSubscriptions(){
        $mysub=$this->getArr();
        $sub = [];

           foreach ($mysub as $one){
                if($one != '') {
                    $obj = Categories::where('id', $one)->first();
                    $sub[] = $obj->name;
                }
           }

       return view('mysubscriptions')->with('sub',$sub);
    }

    public function getArr(){
        $obj=Subscriptions::where('url',$_SERVER['REMOTE_ADDR'])->orderBy('id','DESK')->first();
        $arr=explode(',',$obj->body);
        return $arr;
    }
}
