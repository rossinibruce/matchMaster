<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = array(
            array('name' => 'Bruce Gabriel', 'lastname' => 'Rossini', 'cpf' => '09604088947', 'user_id' => 1),
        );
        
        foreach ($persons as $person) {
            Person::create([
                'name' => $person['name'],
                'lastname' => $person['lastname'],
                'cpf' => $person['cpf'],
                'user_id' => $person['user_id'],
            ]);
        }
    }
}
