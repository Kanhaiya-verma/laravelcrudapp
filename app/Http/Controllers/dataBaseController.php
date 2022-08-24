<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataBaseController extends Controller
{
    public function DatabaseShow()
    {
        $employee = DB::table('employee')->get();
        // $employee = DB::table('employee')->where('id',1)->first();
        // $employee = DB::table('employee')->pluck('Salary', 'Name');
        // $employee = DB::table('employee')->select('Name')->get();
        // $employee = DB::table('employee')->pluck('Salary', 'Name');
        // dd($employee);
        return view('Employee', ['ED' => $employee]);
    }


    public function showAddData()
    {
        return view('Employee.add');
    }
    public function saveData(Request $request)
    {
        if (isset($request->Id)) {
            DB::table('employee')->where('Id', $request->Id)->update(['Name' => $request->Name, 'Age' => $request->Age, 'Salary' => $request->Salary]);
        } else {
            $Name = $request->name;
            $Age = $request->age;
            $Salary = $request->salary;
            DB::table('employee')->insert(['Name' => $Name, 'Age' => $Age, 'Salary' => $Salary]);
            return redirect('/')->with('status', 'Data added successfully');
        }
        return redirect('/')->with('status', 'Data Edited successfully');
    }
    public function deleteData($Id)
    {
        DB::table('employee')->where('Id', $Id)->delete();
        return redirect('/')->with('status', 'Data deleted successfully');
    }



    public function editData($Id)
    {
        $data = DB::table('employee')->find($Id);
        return view('Employee.edit', ['data' => $data]);
    }
}
