<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classs;
use App\Models\Teacher;

class RegistrationController extends Controller
{
    //
    public function registration(){
        $c = Classs::all();
        return view ('student.registration')->with('c',$c);
    }
    public function registrationpost(Request $req){
        $req->validate([
            'name' => 'required|regex:/^[a-z A-z]+$/',
            'username' => 'required|unique:students,username',
            'email' => 'required|unique:students,email',
            'phone' => 'required|min:11|regex:/^01[3-9]{1}[0-9]{8}$/',
            'dob' => 'required',
            'class' => 'required',
            'password' => 'required|min:3',
            'confirm_password' => 'required|same:password'
        ]);

        $today = date("y-m-d");

        $student = new Student();
        $student->name = $req->name;
        $student->username = $req->username;
        $student->email = $req->email;
        $student->phone = $req->phone;
        $student->dob = $req->dob;
        
        $dob = $student->dob;
        $age = date_diff(date_create($dob),date_create($today));
        
        $student->age = $age->format("%y Years %m Months");
        $student->class_id = $req->class;
        $student->password = md5($req->password);
        
        if(date_create($dob)<date_create($today)){
            $student->save();
        }
        else
        {
            return 'The student not born yet!';
        }
    }

    public function registrationt(){
        $c = Classs::all();
        return view ('teacher.registration')->with('c',$c);
    }
    public function registrationtpost(Request $req){
        $req->validate([
            'name' => 'required|regex:/^[a-z A-z.]+$/',
            'username' => 'required|unique:teachers,username',
            'email' => 'required|unique:teachers,email',
            'phone' => 'required|min:11|regex:/^01[3-9]{1}[0-9]{8}$/',
            'dob' => 'required',
            'salary' => 'required',
            'password' => 'required|min:3',
            'confirm_password' => 'required|same:password'
        ]);

        $student = new Teacher();
        $student->name = $req->name;
        $student->username = $req->username;
        $student->email = $req->email;
        $student->phone = $req->phone;
        $student->dob = $req->dob;
        $student->salary = $req->salary;
        $student->password = md5($req->password);
        $student->save();
    }

    // public function age(){
    //     $dob = "30-10-1996";
    //     $today = date("y-m-d");

    //     $age = date_diff(date_create($dob),date_create($today));
    //     return $age->format("%y years %m month");
    // }
}
