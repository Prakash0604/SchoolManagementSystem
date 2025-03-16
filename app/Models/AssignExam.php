<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignExam extends Model
{
    use HasFactory;
    protected $fillable=['academic_year_id','exam_id','education_level_id','created_by','updated_by'];
}
