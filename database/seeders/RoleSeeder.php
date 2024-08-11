<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array('name' => 'Jogador', 'description' => 'Jogador'),
            array('name' => 'Organizador', 'description' => 'Organizador'),
        );
        
        foreach ($users as $user) {
            Role::create([
                'name' => $user['name'],
                'description' => $user['description'],
            ]);
        }
    }
}
