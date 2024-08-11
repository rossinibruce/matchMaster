<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = array(
            array('name' => 'ART FC', 'description' => 'Futebol e resenha', 'user_id' => 1),
        );
        
        foreach ($teams as $team) {
            Team::create([
                'name' => $team['name'],
                'description' => $team['description'],
                'user_id' => $team['user_id'],
            ]);
        }
    }
}
