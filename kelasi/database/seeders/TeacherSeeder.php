<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\School;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $school = School::first();

        Teacher::create([
            'school_id' => $school->id,
            'first_name' => 'Mark',
            'last_name' => 'Brown',
            'email' => 'teacher@example.com',
            'phone' => '0303030303',
            'hire_date' => '2023-09-01',
        ]);
    }
}
