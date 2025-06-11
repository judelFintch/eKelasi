<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\AcademicYear;

class GradeSeeder extends Seeder
{
    public function run(): void
    {
        $student = Student::first();
        $subject = Subject::first();
        $teacher = Teacher::first();
        $year = AcademicYear::first();

        Grade::create([
            'student_id' => $student->id,
            'subject_id' => $subject->id,
            'teacher_id' => $teacher->id,
            'academic_year_id' => $year->id,
            'value' => 15.5,
        ]);
    }
}
