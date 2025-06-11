<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Fee;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        $student = Student::first();
        $fee = Fee::first();

        Payment::create([
            'student_id' => $student->id,
            'fee_id' => $fee->id,
            'amount' => 250.00,
            'payment_date' => '2024-10-01',
        ]);
    }
}
