<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sports = array(
            array('name' => 'Futebol', 'description' => 'Futebol'),
            array('name' => 'Volei', 'description' => 'Volei'),
            array('name' => 'Futsal', 'description' => 'Futsal'),
            array('name' => 'Basquete', 'description' => 'Basquete'),
            array('name' => 'Handball', 'description' => 'Handball'),
            array('name' => 'Ping Ping', 'description' => 'Ping Pong'),
            array('name' => 'Skate', 'description' => 'Skate'),
            array('name' => 'Cricket', 'description' => 'Cricket'),
        );
        
        foreach ($sports as $sport) {
            Sport::create([
                'name' => $sport['name'],
                'description' => $sport['description'],
            ]);
        }
    }
}
