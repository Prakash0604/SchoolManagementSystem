<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalary extends Model
{
    use HasFactory;
    protected $fillable=['user_id','month','salary_date','net_salary','bonus','total_salary','fine','created_by','updated_by'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
