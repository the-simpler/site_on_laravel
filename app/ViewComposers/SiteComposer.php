<?php
namespace App\ViewComposers;

use App\Catalog;
use Illuminate\View\View;
use App\Subscriptions;

class SiteComposer{

	public function compose(View $view){
        $str=$_SERVER['REQUEST_URI'];
        $arr=explode('/', $str);
        $elem=end($arr);
		$cats=Catalog::where('showhide', 'show')->get();
        $obj=Subscriptions::where('url',$_SERVER['REMOTE_ADDR'])->orderBy('id','DESK')->first();
        $arr=explode(',',$obj->body);
        $sub = [];
        foreach ($arr as $one){
            if($one != '') {
                $sub[] = $one;
            }
        }

		$view->with('cats',$cats)->with('elem',$elem)->with('sub',$sub);
	}
}




?>