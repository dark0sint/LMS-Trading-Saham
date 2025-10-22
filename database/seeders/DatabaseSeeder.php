<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        Course::create([
            'title' => 'Introduction to Stock Trading',
            'description' => 'Learn the basics of stock trading.',
            'instructor_id' => 1,
        ]);
    }
}
