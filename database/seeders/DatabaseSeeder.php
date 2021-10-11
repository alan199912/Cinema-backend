<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\CinemaSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(MovieSeeder::class);
        $this->call(CinemaSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        \App\Models\Schedule::factory(50)->create();
    }
}
