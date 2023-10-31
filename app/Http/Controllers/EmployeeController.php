<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getEmployee(){
        return response()->json(Employee::all(),200);
    }

    public function getEmployeeById($id){
        $employee = Employee::find($id);
        if ($employee != null){
            return response()->json($employee,200);
        }
        return response()->json('not found !!!!!',404);
    }

    public function addEmployee(Request $request){
        $employee = Employee::create($request ->all());
        return response($employee,201);
    }


    public function updateEmployer(Request $request,$id){
            $employee = Employee::find($id);
            if($employee == null){
                return response()->json(['message' => 'employee not found'],404);
            }
            $employee ->update($request->all());
            return response($employee,200);
    }

    public function deleteEmployer($id){
        $employee = Employee::find($id);
        if($employee == null){
            return response()->json(['message' => 'employee not found',404]);
        }
        $employee->delete();
        return \response()->json(null,204);
    }
}
