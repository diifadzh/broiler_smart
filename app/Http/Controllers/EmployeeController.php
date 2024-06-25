<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();

        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('content.manage.employee.index', compact('employee'));
    }

    public function create()
    {
        $employee = Employee::all();
        return view('content.manage.employee.create', compact('employee'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                "name" => ['required'],
                "email" => ['required', 'email'],
                "phone_number" => ['required'],
                "address" => ['required'],
                "gender" => ['required'],
                "position" => ['required']
            ]);
            // Add Device Data
            $employee = new Employee();
            $employee->name = $request->name;
            $employee->email = $request->email;
            $employee->phone_number = $request->phone_number;
            $employee->address = $request->address;
            $employee->gender = $request->gender;
            $employee->position = $request->position;
            $employee->save();

            toastr()->success("Device Created Successfully");
            return redirect()->route('manage.employee.index');
        } catch (\Illuminate\Database\QueryException $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->route('manage.employee.create');
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $employee = Employee::find($id);

        $employee->delete();
        toastr()->success("User deleted successfully");
        return redirect()->back();
    }
}
