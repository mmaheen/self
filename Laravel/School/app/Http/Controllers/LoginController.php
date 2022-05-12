<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class LoginController extends Controller
{
    //
    public function login(){
        return view ('login');
    }

    public function loginpost(Request $req){
        $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $s = Student:: where('username',$req->username )->where('password',md5($req->password))->first();
        if($s){
            return "Login Success";
        }
        else{
            return 'Login Failed';
        }
    }
}
