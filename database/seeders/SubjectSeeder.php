<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('ALTER TABLE `subject` AUTO_INCREMENT = 1');
        for($i=0;$i<20;++$i) {
            (new \App\Models\Core\Subject([
                'subject_name' => fake()->jobTitle . ' ' . rand(1, 3),
                'speciality_id' => rand(1, 5)
            ]))->save();
        }
    }
}
