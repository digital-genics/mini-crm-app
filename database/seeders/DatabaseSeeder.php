<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Run This Command: php artisan db:seed --class=DatabaseSeeder
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
        ]);
    }
}
