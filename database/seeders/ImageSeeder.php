<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('ALTER TABLE `image` AUTO_INCREMENT = 1');
        $image = fake()->image($dir=public_path('assets'));
        $ext = explode('.', $image);
        $ext = $ext[sizeof($ext)-1];
        $image = file_get_contents($image);
        $image_hash = md5($image);
        \App\Models\Core\Image::insert([
            [
                'hash' => $image_hash,
                'name' => $image_hash . '.' . $ext
            ]
        ]);
    }
}
