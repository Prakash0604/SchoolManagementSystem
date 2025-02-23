<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $religions=['Christianity',
        'Atheist',
        'Buddhism',
        'Hinduism',
        'Islam',
        'Jainism',
        'Juche',
        'Judaism',
        'Nonreligious',
        'Rastafarianism',
        'Secular',
        'Shinto',
        'Sikhism',
        'Spiritism',
        'Tenrikyo',
        'Unitarian',
        'Zoroastrianism',
        'primal',
        'Other'];

        foreach ($religions as $religion) {
            Religion::create([
                'title'=>$religion
            ]);
        }
    }
}
