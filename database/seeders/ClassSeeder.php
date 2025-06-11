<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolClass;
use App\Models\School;
use App\Models\AcademicYear;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        $school = School::first();
        $year = AcademicYear::first();

        SchoolClass::create([
            'school_id' => $school->id,
            'academic_year_id' => $year->id,
            'name' => 'Class A',
            'level' => '1',
        ]);
    }
}
