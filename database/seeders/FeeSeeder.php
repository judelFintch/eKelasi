<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fee;
use App\Models\School;

class FeeSeeder extends Seeder
{
    public function run(): void
    {
        $school = School::first();

        Fee::create([
            'school_id' => $school->id,
            'name' => 'Tuition',
            'amount' => 500.00,
        ]);
    }
}
