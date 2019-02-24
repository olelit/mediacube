<?php

namespace App\Providers;

use App\Department;
use Illuminate\Support\ServiceProvider;

class DepartmentServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->getAllDepartments();
    }

    public function getAllDepartments(){
        view()->composer('providers.department-component',function ($view){
            $view->with('departmentProvider',Department::all());
        });
    }
}
