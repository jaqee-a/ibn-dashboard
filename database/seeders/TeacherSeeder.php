<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('ALTER TABLE `teacher` AUTO_INCREMENT = 1');
        for($i=0;$i<5;++$i) {
            $user = [
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'email' => fake()->unique()->safeEmail(),
                'username' => fake()->unique()->userName(),
                'birthday' => fake()->dateTimeBetween($startDate='-30 years', $endDate='-20 years'),
                'city_id' => rand(1, 58),
                'town_id' => 15,
                'address' => fake()->address(),
                'phone_number' => fake()->phoneNumber(),
                'active' => true,
                'role_id' => 4,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ];

            $user = new \App\Models\Core\User($user);
            $user->save();

            $student = new \App\Models\Core\Teacher();
            $student->user_id = $user->id;
            $student->save();
        }
    }
}
