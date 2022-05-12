<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Classs;
use App\Models\Teacher;
use App\Models\Exam;

class ExamController extends Controller
{
    //
    public function form(Request $req){
        $id = $req->id;
        $c = Classs::all();
        $su = Subject::select("*")->where('class_id',$id)->get();
        $st = Student::select("*")->where('class_id',$id)->get();
        $t = Teacher::all();
        return view ('exam.form')->with('c',$c)->with('su',$su)->with('st',$st)->with('t',$t)->with('id',$id);
    }

    public function formpost(Request $req){
        $req->validate([
            'name' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
            'student_id' => 'required',
        ]);

        $e = new exam();
        $e->name = $req->name;
        $e->subject_id = $req->subject_id;
        $e->teacher_id = $req->teacher_id;
        $e->student_id = $req->student_id;
        $e->save();
    }

    public function class(){
        $c = Classs :: all();
        return view ('exam.class')->with('c',$c);
    }
}
