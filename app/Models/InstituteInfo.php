<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteInfo extends Model
{
    use HasFactory;
    protected $fillable=['logo','contact','schoolname','email','address','website','slogan'];
}
