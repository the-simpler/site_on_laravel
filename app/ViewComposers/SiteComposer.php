<?php
namespace App\ViewComposers;

use App\Catalog;
use Illuminate\View\View;


class SiteComposer{

	public function compose(View $view){

		$cats=Catalog::where('showhide', 'show')->get();
		$view->with('cats',$cats);
	}
}




?>