<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Subject;

class Classs extends Model
{
    use HasFactory;
    protected $table = 'classes';
    public $timestamps = false;

    public function subject(){
        return $this->hasMany(Subject::class,'class_id');
    }
}
