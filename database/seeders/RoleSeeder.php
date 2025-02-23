<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers=['Teacher','Staff','Receptionist','Principal'];
        foreach ($teachers as $teacher) {
            Role::create([
                'title'=>$teacher
            ]);
        }
    }
}
