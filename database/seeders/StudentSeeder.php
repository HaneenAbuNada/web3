<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'Ahmad',
            'course_id' => 1
        ]);

        Student::create([
            'name' => 'Samar',
            'course_id' => 2
        ]);
    }
}
