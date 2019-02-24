<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $empoloyees = Employee::paginate(15);
        $departments = Department::all();

        return view('welcome',[
            'employees' => $empoloyees,
            'departments' => $departments,
        ]);
    }
}
