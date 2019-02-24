<?php

namespace App\Providers;

use App\Gender;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class GenderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->getAllGenders();
    }

    public function getAllGenders(){
        view()->composer('providers.gender-component',function ($view){
            $view->with('gendersProvider',Gender::all());
        });
    }
}
