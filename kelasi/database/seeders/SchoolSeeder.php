<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    public function run(): void
    {
        School::create([
            'name' => 'Main School',
            'address' => '123 Avenue',
            'phone' => '0101010101',
            'email' => 'info@mainschool.test',
        ]);
    }
}
