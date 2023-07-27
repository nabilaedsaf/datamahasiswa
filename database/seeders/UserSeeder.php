<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
        ]);
    }
}
