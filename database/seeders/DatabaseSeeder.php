<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            CarSeeder::class,
            AdminSeeder::class,
            NewsSeeder::class,
        ]);

        User::factory(5)->create();
    }
}
