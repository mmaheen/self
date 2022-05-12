<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use App\Models\StudentSubject;
use App\Models\Classs;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function class(){
        return $this->belongsTo(Classs::class,'class_id');
    }
}
