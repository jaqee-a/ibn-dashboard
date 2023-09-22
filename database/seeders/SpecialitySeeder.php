<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('ALTER TABLE `speciality` AUTO_INCREMENT = 1');
        for($i=0;$i<5;++$i) {
            (new \App\Models\Core\Speciality([
                'speciality_name' => fake()->jobTitle
            ]))->save();
        }
    }
}
