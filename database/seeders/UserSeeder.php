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
            array('email' => 'bruce@mm.com.br', 'password' => bcrypt('123456'), 'role_id' => 1),
            array('email' => 'convidado@mm.com.br', 'password' => bcrypt('123456'), 'role_id' => 1),
        );
        
        foreach ($users as $user) {
            User::create([
                'email' => $user['email'],
                'email_verified_at' => now(),
                'password' => $user['password'],
                'role_id' => $user['role_id'],
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
