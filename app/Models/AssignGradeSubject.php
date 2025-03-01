<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignGradeSubject extends Model
{
    use HasFactory;
    protected $fillable = ['academic_year_id', 'education_level_id', 'subject_id', 'full_marks', 'pass_marks','status', 'created_by', 'updated_by'];

    public function year()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo(EducationLevel::class, 'education_level_id', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
