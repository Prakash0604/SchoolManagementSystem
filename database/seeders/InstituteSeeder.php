<?php

namespace Database\Seeders;

use App\Models\InstituteInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $school=InstituteInfo::count();

        if($school == 0){
            InstituteInfo::create([
                'contact'=>'9800000000',
                'schoolname'=>'Patan Nist Campus',
                'email'=>'patannist@gmail.com',
                'address'=>'Gwarko Lalitpur',
                'website'=>'https://www.google.com',
                'slogan'=>'Motivate yourself'
            ]);
        }
    }
}
