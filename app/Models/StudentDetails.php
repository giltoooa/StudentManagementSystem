<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->hasOne(TeacherDetails::class,'id','teacher_id');
    }

    public function markDetails()
    {
        return $this->hasOne(Mark::class,'student_id','id');
    }

   
}
