<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('DELETE FROM teacher_subject');
        \App\Models\Core\Admin::query()->delete();
        \App\Models\Core\Student::query()->delete();
        \App\Models\Core\Teacher::query()->delete();
        \App\Models\Core\Communication::query()->delete();
        \App\Models\Core\User::query()->delete();
        \App\Models\Core\Image::query()->delete();
        \App\Models\Core\Role::query()->delete();
        \App\Models\Static\Town::query()->delete();
        \App\Models\Static\City::query()->delete();
        \App\Models\Core\Subject::query()->delete();
        \App\Models\Core\Speciality::query()->delete();
        $this->call([
            CitySeeder::class,
            TownSeeder::class
        ]);
        $this->call([
            RoleSeeder::class,
        ]);
        DB::statement('ALTER TABLE `users` AUTO_INCREMENT = 1');
        \App\Models\Core\User::insert([
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'username' => 'fisher.harmon',
            'birthday' => fake()->dateTimeBetween($startDate='-30 years', $endDate='-20 years'),
            'city_id' => 18,
            'town_id' => 15,
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'active' => true,
            'role_id' => 1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $admin = new \App\Models\Core\Admin;
        $admin->user_id = 1;
        $admin->save();

        DB::statement('ALTER TABLE `image` AUTO_INCREMENT = 1');
        $this->call([
            StudentSeeder::class,
            SpecialitySeeder::class,
            SubjectSeeder::class,
            TeacherSeeder::class,
            SpecialitySeeder::class,
            TeacherSubjectSeeder::class
        ]);

    }
}
