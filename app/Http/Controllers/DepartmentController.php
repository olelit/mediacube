<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\DepartmentRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    private $redirectToIndex = 'DepartmentController@index';

    public function index()
    {
        $departments = Department::paginate(15);
        return view('departments.index',compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(DepartmentRequest $request)
    {
        Department::create($request->all());
        return redirect()->action($this->redirectToIndex);
    }

    public function edit(Department $department)
    {
        return view('departments.edit',compact('department'));
    }

    public function update(DepartmentRequest $request,Department $department)
    {
        $department->update($request->all());
        return redirect()->action($this->redirectToIndex);
    }

    public function destroy($id)
    {
        $workers = Department::find($id)->employees;

        if(count($workers) > 0){
            return "false";
        }

        Department::destroy($id);
        return "true";
    }
}
