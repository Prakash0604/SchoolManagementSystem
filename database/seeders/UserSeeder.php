<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Prakash Chaudhayr',
            'email'=>'admin@gmail.com',
            'password'=>'12345678',
            'contact'=>'98000000000',
            'role_id'=>1,
            'image'=>'/default/avatar-5.webp',
            'join_date'=>'2002-01-01',
            'monthly_salary'=>'20000',
            'dob'=>'2002-01-01',
            'gender'=>'male',
            'username'=>'EDUPRAE0101',
            'registration_id'=>'EDUPRAE0101',
            'user_type'=>'employee',
        ]);
    }
}
