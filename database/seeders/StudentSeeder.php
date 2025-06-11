<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\School;
use App\Models\SchoolClass;
use App\Models\ParentModel;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $school = School::first();
        $class = SchoolClass::first();
        $parent = ParentModel::first();

        Student::create([
            'school_id' => $school->id,
            'class_id' => $class->id,
            'parent_id' => $parent->id,
            'first_name' => 'Alice',
            'last_name' => 'Smith',
            'birth_date' => '2010-05-10',
            'gender' => 'F',
        ]);
    }
}
