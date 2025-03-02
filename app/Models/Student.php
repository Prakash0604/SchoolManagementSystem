<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['student_name', 'student_email', 'student_dob', 'registration_no', 'previous_school', 'student_contact', 'student_address', 'username', 'password', 'student_gender', 'student_image', 'student_dicount', 'date_of_admission', 'academic_status', 'status', 'institute_id', 'created_by', 'updated_by'];
    public function academicData()
    {
        return $this->hasOne(StudentAcademic::class)->where('is_current',1);
    }

    public function studentMember()
    {
        return $this->hasMany(StudentGuardian::class);
    }

    public function college()
    {
        return $this->belongsTo(InstituteInfo::class, 'college_id', 'id');
    }

    protected $casts = [
        'password' => 'hashed',
    ];

    // public function feeStructure(){
    //     return $this->belongsTo(FeeStructure::class,'fee_structure_id','id');
    // }

    // public function studentBill(){
    //     return $this->hasMany(StudentBill::class,'student_id','id');
    // }
}
