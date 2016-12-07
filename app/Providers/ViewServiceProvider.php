<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    View::composers([
        "App\ViewComposers\SiteComposer"=> "layouts.base"

     ] );//
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
