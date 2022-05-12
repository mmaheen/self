<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exam;
use App\Models\Result;
use App\Models\Classs;
use App\Models\Subject;
use App\Models\Student;

class ResultController extends Controller
{
    //
    public function class(){
        $c = Classs :: all();
        return view ('result.class')->with('c',$c);
    }

    public function form(Request $req){
        $id = $req->id;
        $c = Classs::all();
        $su = Subject::select("*")->where('class_id',$id)->get();
        $st = Student::select("*")->where('class_id',$id)->get();
        //$t = Teacher::all();
        return view ('result.form')->with('c',$c)->with('su',$su)->with('st',$st)->with('id',$id);
    }
}
