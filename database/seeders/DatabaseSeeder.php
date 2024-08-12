<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(LessonTagSeeder::class);
    }
}
