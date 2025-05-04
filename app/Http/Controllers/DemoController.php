<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\students;

use DB; 

class DemoController extends Controller
{
    public function RenderHello(){
        $students = DB::table("student_table")->select("*") ->  get();


        $section = "BSIT 3E";
        $sections = ["BSIT 3E", "BSIT 3F"];
        return view('helloworld', ["section" => $sections,
        
        "students" => $students
        ]);
    }

    public function addstudent(Request $request){
        $student = new students;
        $student->student_name = $request -> name;
        $student->age = $request->age;
        $student-> save();

        return redirect('/hello')->with('success', 'Student added successfully!');
        }
}
