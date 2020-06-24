<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff(){
        return view('staff');
    }
    public function stffStore(Request $request){
        // print_r($request->all());
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->mobile = $request->mobile;
        $staff->email = $request->email;
        $staff->save();
        return back()->with('success','data inserted successfully');
    }
    public function stffList(){
        $staffs = Staff::all();
        return view('index',compact('staffs'));
    }
}
