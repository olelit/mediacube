<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    private $redirectToIndex = 'EmployeeController@index';

    public function index()
    {
        $employees = Employee::paginate(15);
        return view('employee.index',compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeRequest $request)
    {
        $employee = Employee::create($request->all());
        $employee->departments()->attach($request->departments);
        return redirect()->action($this->redirectToIndex);
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit',compact('employee'));
    }

    public function update(EmployeeRequest $request,Employee $employee)
    {
        $employee->update($request->all());
        $employee->departments()->sync($request->departments);
        return redirect()->action($this->redirectToIndex);
    }

    public function destroy($id)
    {
        Employee::destroy($id);
        return "true";
    }
}
