<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student(){
        return view('studentCreate');
    }
    public function studentCreate(Request $request){
        // print_r($request->all());
        $student = new Student();
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->save();
        return back()->with('status','data inserted successfuly');
    }

}
