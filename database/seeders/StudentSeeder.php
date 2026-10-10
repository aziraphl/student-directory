<?php
// Angel Delmo

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'student_number' => '2026-0001',
                'first_name' => 'Maria',
                'last_name' => 'Santos',
                'program' => 'BS Information Technology',
                'year_level' => 1,
                'email' => 'maria.santos@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0002',
                'first_name' => 'John',
                'last_name' => 'Cruz',
                'program' => 'BS Computer Science',
                'year_level' => 2,
                'email' => 'john.cruz@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0003',
                'first_name' => 'Angela',
                'last_name' => 'Reyes',
                'program' => 'BS Information Technology',
                'year_level' => 3,
                'email' => 'angela.reyes@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0004',
                'first_name' => 'Mark',
                'last_name' => 'Garcia',
                'program' => 'BS Business Administration',
                'year_level' => 4,
                'email' => 'mark.garcia@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0005',
                'first_name' => 'Sofia',
                'last_name' => 'Dela Cruz',
                'program' => 'BS Information Technology',
                'year_level' => 2,
                'email' => 'sofia.delacruz@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0006',
                'first_name' => 'Kevin',
                'last_name' => 'Mendoza',
                'program' => 'BS Computer Science',
                'year_level' => 1,
                'email' => 'kevin.mendoza@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0007',
                'first_name' => 'Nicole',
                'last_name' => 'Torres',
                'program' => 'BS Education',
                'year_level' => 3,
                'email' => 'nicole.torres@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0008',
                'first_name' => 'Daniel',
                'last_name' => 'Flores',
                'program' => 'BS Information Technology',
                'year_level' => 4,
                'email' => 'daniel.flores@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0009',
                'first_name' => 'Rachel',
                'last_name' => 'Navarro',
                'program' => 'BS Psychology',
                'year_level' => 2,
                'email' => 'rachel.navarro@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0010',
                'first_name' => 'Joshua',
                'last_name' => 'Ramos',
                'program' => 'BS Information Technology',
                'year_level' => 1,
                'email' => 'joshua.ramos@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}