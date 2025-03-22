<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamRecord extends Model
{
    use HasFactory;
    protected $fillable = ['academic_year_id', 'exam_id', 'education_level_id', 'classroom_id'];

    public function marks()
    {
        return $this->hasMany(ExamRecord::class);
    }
}
