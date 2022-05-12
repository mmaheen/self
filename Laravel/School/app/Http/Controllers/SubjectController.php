<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Classs;
use App\Models\Teacher;

class SubjectController extends Controller
{
    //
    public function add(){
        $c = Classs::all();
        $t = Teacher::all();
        return view ('subject.add')->with('c',$c)->with('t',$t);
    }

    public function addpost(Request $req){
        $req->validate([
            'name' => 'required',
            'class' => 'required',
            'teacher' => 'required',
        ]);
        $s = new Subject();
        $s->name = $req->name;
        $s->class_id = $req->class;
        $s->teacher_id = $req->teacher;
        $s->save();
    }

    public function class(){
        $c = Classs :: all();
        return view ('subject.class')->with('c',$c);
    }

    public function list(Request $req){
        $s = Subject :: select("*") -> where('class_id',$req->id)->get();
        //$s= Subject :: all();
        return view('subject.list')->with('s',$s);
    }

    public function student(){
        $s = Subject::all();
        return $s->studentsubject;
    }

    public function details(Request $req){
        $s = Subject::where('id',$req->id)->first();
        //return $s;
        return view ('subject.details')->with('s',$s);
    }
}
