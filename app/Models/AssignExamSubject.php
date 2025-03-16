<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignExamSubject extends Model
{
    use HasFactory;
    protected $fillable=['assign_exam_id','subject_id','date','full_marks','pass_marks','start_at','end_at'];
}
