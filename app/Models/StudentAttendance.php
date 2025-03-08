<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    use HasFactory;
    protected $fillable=['student_id','education_level_id','academic_year_id','classroom_id','attendance_date','status'];

    public function student(){
        return $this->belongsTo(Student::class,'student_id','id');
    }
     public function education(){
        return $this->belongsTo(EducationLevel::class,'education_level_id','id');
    }
    public function year(){
        return $this->belongsTo(AcademicYear::class,'academic_year_id','id');
    }
     public function classroom(){
        return $this->belongsTo(Classroom::class,'classroom_id','id');
    }

}
