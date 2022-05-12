<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function list(){
        $s = Student::all();
        //$s = Student :: where ('id',1)->first();
        //return $s->class;
        return view ('student.list')->with('s',$s);
    }

    public function class(Request $req){
        $s = Student::select("*")->where('class', $req->id)->get();
        return view('student.class')->with('s',$s);
    }

    public function details(Request $req){
        $s = Student::where('id',$req->id)->first();
        return view ('student.details')->with('s',$s);
    }
}
