<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ParentModel;

class ParentSeeder extends Seeder
{
    public function run(): void
    {
        ParentModel::create([
            'name' => 'John Doe',
            'email' => 'parent@example.com',
            'phone' => '0202020202',
            'address' => 'Parent Street 1',
        ]);
    }
}
