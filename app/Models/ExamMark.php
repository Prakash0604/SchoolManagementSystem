<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamMark extends Model
{
    use HasFactory;
    protected $fillable = ['exam_record_id', 'student_id', 'subject_id', 'marks_obtained'];

    public function examRecord()
    {
        return $this->belongsTo(ExamRecord::class);
    }
}
