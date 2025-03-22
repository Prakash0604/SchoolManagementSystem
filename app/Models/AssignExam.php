<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignExam extends Model
{
    use HasFactory;
    protected $fillable=['academic_year_id','exam_id','education_level_id','created_by','updated_by'];
    public function examsubject(){
        return $this->hasMany(AssignExamSubject::class, 'assign_exam_id', 'id');
    }


    public function exam(){
        return $this->belongsTo(Exam::class,'exam_id','id');
    }

    public function year(){
        return $this->belongsTo(AcademicYear::class,'academic_year_id','id');
    }

    public function level(){
        return $this->belongsTo(EducationLevel::class,'education_level_id','id');
    }

    public function exam_subject(){
        return $this->hasMany(AssignExamSubject::class,'assign_exam_id','id');
    }
}
