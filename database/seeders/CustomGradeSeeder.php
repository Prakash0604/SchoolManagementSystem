<?php

namespace Database\Seeders;

use App\Models\CustomGrading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'grade'=>'A+',
                'from'=>"80",
                'upto'=>'100',
                'status'=>'Pass'
            ],

            [
                'grade'=>'A',
                'from'=>"70",
                'upto'=>'79',
                'status'=>'Pass'
            ],

            [
                'grade'=>'B+',
                'from'=>"60",
                'upto'=>'69',
                'status'=>'Pass'
            ],

            [
                'grade'=>'B',
                'from'=>"50",
                'upto'=>'59',
                'status'=>'Pass'
            ],

            [
                'grade'=>'C',
                'from'=>"40",
                'upto'=>'49',
                'status'=>'Pass'
            ],

            [
                'grade'=>'D',
                'from'=>"30",
                'upto'=>'39',
                'status'=>'Pass'
            ], [
                'grade'=>'F',
                'from'=>"0",
                'upto'=>'29',
                'status'=>'Fail'
            ],
        ];

        CustomGrading::insert($data);
    }
}
