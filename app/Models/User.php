<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'contact',
        'role_id',
        'image',
        'join_date',
        'monthly_salary',
        'dob',
        'gender',
        'guardains',
        'experience',
        'national_id',
        'religion_id',
        'blood_group_id',
        'education',
        'home_address',
        'registration_id',
        'username',
        'status',
    ];


    public function religion()
    {
        return $this->belongsTo(Religion::class, 'religion_id', 'id');
    }

    public function blood_group()
    {
        return $this->belongsTo(BloodGroup::class, 'blood_group_id', 'id');
    }

    public function role(){
        return $this->belongsTo(Role::class,'role_id','id');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
