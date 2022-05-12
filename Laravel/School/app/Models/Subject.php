<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Teacher;
use App\Models\Classs;

class Subject extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public function class(){
        return $this->belongsTo(Classs::class,'class_id');
    }
}
