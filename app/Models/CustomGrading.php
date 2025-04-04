<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomGrading extends Model
{
    use HasFactory;
    protected $fillable=['grade','from','upto','status'];
}
