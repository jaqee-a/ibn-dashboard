<?php

namespace Database\Seeders;

use App\Models\Core\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::query()->where('id', 1)->first()->subjects()->sync([1, 2, 3]);
    }
}
