<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'title'=>'One',
            ],

            [
                'title'=>'Two',
            ],

            [
                'title'=>'Three',
            ],

            [
                'title'=>'Four',
            ],

            [
                'title'=>'Five',
            ],

            [
                'title'=>'Six',
            ],

            [
                'title'=>'Seven',
            ],

            [
                'title'=>'Eight',
            ],

            [
                'title'=>'Nine',
            ],

            [
                'title'=>'Ten',
            ],

            [
                'title'=>'Eleven',
            ],

            [
                'title'=>'Twelve',
            ],

            [
                'title'=>'Nursury',
            ],

            [
                'title'=>'LKG',
            ],

            [
                'title'=>'UKG',
            ],
        ];

        EducationLevel::insert($data);
    }
}
