<?php

namespace App\Providers;

use App\Models\category;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view ()->composer('front.inc.header',function($view){
            $view ->with('categories',category::select("id","name")->get());
            $view ->with('setting',Setting::select("logo","favicon")->first());
        });
        view ()->composer('front.inc.footer',function($view){
            $view ->with('setting',Setting::first());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
