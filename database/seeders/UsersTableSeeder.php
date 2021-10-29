<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adrian Nurse', 'email' => 'mail1@gmail.com', 'password' => bcrypt("HelloPass!"), 
            'email_verified_at' => now()
        ]);
    }
}
