<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAcademic extends Model
{
    use HasFactory;
    protected $fillable=['student_id','academic_year_id','education_level_id','classroom_id','registraion_number','roll_number','is_current'];

    public function academicYear(){
        return $this->belongsTo(AcademicYear::class,'academic_year_id','id');
    }

    public function educationLevel(){
        return $this->belongsTo(EducationLevel::class,'education_level_id','id');
    }

    public function classroom(){
        return $this->belongsTo(Classroom::class,'classroom_id','id');
    }
}
