<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable=['user_id','class_title','monthly_tution_fees','education_level_id','academic_year_id','status'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function year(){
        return $this->belongsTo(AcademicYear::class,'academic_year_id','id');
    }

    public function educationLevel(){
        return $this->belongsTo(EducationLevel::class,'education_level_id','id');
    }
}
