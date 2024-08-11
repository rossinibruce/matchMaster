<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(SportSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(PersonHasTeamSeeder::class);
    }
}
