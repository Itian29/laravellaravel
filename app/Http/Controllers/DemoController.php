<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\students;

class DemoController extends Controller
{
    public function RenderHello(){
        $section = "BSIT 3E";
        $sections = ["BSIT 3E", "BSIT 3F"];
        return view('helloworld', ["section" => $sections]);
    }

    public function addstudent(Request $request){
        $student = new students;
        $student->student_name = $request -> name;
        $student->age = $request->age;
        $student-> save();
        }
}
