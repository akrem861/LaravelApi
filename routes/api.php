<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('employees',[EmployeeController::class,'getEmployee']);
Route::get('employee/{id}',[EmployeeController::class,'getEmployeeById']);
Route::post('addEmployee',[EmployeeController::class,'addEmployee']);
Route::put('updateEmployee/{id}',[EmployeeController::class,'updateEmployer']);
Route::delete('deleteEmployee/{id}',[EmployeeController::class,'deleteEmployer']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

