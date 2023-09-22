<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('ALTER TABLE `roles` AUTO_INCREMENT = 1');
        \App\Models\Core\Role::insert([
            [
                'role' => 'ADMIN',
            ],
            [
                'role' => 'STUDENT',
            ],
            [
                'role' => 'PARENT',
            ],
            [
                'role' => 'TEACHER'
            ]
        ]);
    }
}
