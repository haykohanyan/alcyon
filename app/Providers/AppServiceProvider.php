<?php

namespace App\Providers;

use App\Models\Text;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.header-footer',function ($view){

            $view->with('texts',Text::query()->get());

        });
    }


    public function register()
    {
        //
    }
}
