<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date=date('Y-m-d');
        $randomDate = Carbon::createFromFormat('Y-m-d', $date);
        $startOfYear = $randomDate->startOfYear();

        $date = Carbon::createFromFormat('Y-m-d', '2023-05-15');
        $endOfYearDate = $date->copy()->year($date->year)->month(12)->day(31);

        AcademicYear::create([
            'academic_title'=>$date->format('Y'),
            'starting_date'=>$startOfYear->toDateString(),
            'ending_date'=>$endOfYearDate->toDateString()
        ]);
    }
}
