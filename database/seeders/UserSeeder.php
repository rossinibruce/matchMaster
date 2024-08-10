<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array('email' => 'admin@mm.com.br', 'password' => bcrypt('123456')),
        );
        
        foreach ($users as $user) {
            User::create([
                'email' => $user['email'],
                'email_verified_at' => now(),
                'password' => $user['password'],
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
