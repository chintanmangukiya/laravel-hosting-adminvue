<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;

class EmployeeController extends Controller
{
    public function index()
    {
        $employeeList = Employee::orderBy('id','asc')->get();
        return response()->json($employeeList, 200);
        // $employeeList = Employee::orderBy('id','desc')->paginate(10);
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_no' => 'required',
            'city' => 'required',
        ]);

        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->phone_no = $request->phone_no;
        $employee->city = $request->city;

        if($employee->save()){
            return response()->json($employee, 200);
        }else{
            return response()->json($employee, 500);
        }
    }


    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        if($employee){
            $employee->delete();
            return response()->json([
                'msg' => 'Record Deleted Succesfully',
                'status_code' => 200
            ],200);
        }
        else{
            return response()->json([
                'msg' => 'Record Not Deleted',
                'status_code' => 500
            ],500);
        }
    }

    public function show($id)
    {
        $employeeList = Employee::find($id);
        if($employeeList){
            return response()->json($employeeList, 200);
        }else{
            return response()->json('Not Show ', 500);
        }
    }

    public function update(Request $request ,$id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_no' => 'required',
            'city' => 'required',
        ]);

        $editEmp = Employee::find($id);
        $editEmp->first_name = $request->first_name;
        $editEmp->last_name = $request->last_name;
        $editEmp->phone_no = $request->phone_no;
        $editEmp->city = $request->city;

        if($editEmp->save()){
            return response()->json([
                'msg' => 'Employee Updated Successfully',
                'status_code' => 200
            ]);
        }else{
            return response()->json([
                'msg' => 'Employee Not Updated.',
                'status_code' => 500
            ]);
        }
    }

    public function showProfile($id)
    {
        $users = User::find($id);
        return response()->json($users, 200);
    }
    public function updateProfile(Request $request , $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email= $request->email;
        $old_image= $users->image;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = time() .'.'.$file->getClientOriginalName();
            $file->move(public_path('images'),$file_name);
        }
        $users->image= $file_name;

        $imagePhoto = public_path('images/').$old_image;
        if(file_exists($imagePhoto)){
            @unlink($imagePhoto);
        }
        if($users->save()){
            return response()->json('Record Updated found', 200);
        }
        else{
            return response()->json('record not found', 200);
        }
    }

}
