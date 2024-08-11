<?php

namespace Database\Seeders;

use App\Models\PersonHasTeam;
use Illuminate\Database\Seeder;

class PersonHasTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrays = array(
            array('person_id' => 1, 'team_id' => 1),
            array('person_id' => 2, 'team_id' => 1),
        );
        
        foreach ($arrays as $array) {
            PersonHasTeam::create([
                'person_id' => $array['person_id'],
                'team_id' => $array['team_id'],
            ]);
        }
    }
}
