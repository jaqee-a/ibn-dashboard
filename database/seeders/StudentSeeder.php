<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;++$i) {
            $image_name = fake()->image($dir=public_path('assets'));
            $image = file_get_contents($image_name);
            $path = explode('/', $image_name);
            $image_name = $path[sizeof($path)-1];
            $image_hash = md5($image);
            $image = new \App\Models\Core\Image();
            $image->hash = $image_hash;
            $image->name = $image_name;
            $image->save();

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
                'role_id' => 2,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ];

            $user = new \App\Models\Core\User($user);
            $user->save();

            $student = new \App\Models\Core\Student();
            $student->user_id = $user->id;
            $student->reference = Str::random(15);
            $student->image_id = $image->id;
            $student->save();
        }
    }
}
