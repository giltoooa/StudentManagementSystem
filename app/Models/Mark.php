<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{

    protected $table="mark";
    use HasFactory;
    public function studentDetails()
    {
        return $this->hasOne(StudentDetails::class,'id','student_id');
    }
}
