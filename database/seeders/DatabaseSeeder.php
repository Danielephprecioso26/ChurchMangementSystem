<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'JLYCC ADMIN',
            'email' => 'jlycc_admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
            'is_staff1' => false,
            'is_staff2' => false,
        ]);

        User::create([
            'name' => 'JLYCC STAF1',
            'email' => 'jlycc_staff1@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
            'is_staff1' => false,
            'is_staff2' => false,
        ]);

        User::create([
            'name' => 'JLYCC STAF2',
            'email' => 'jlycc_staff2@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
            'is_staff1' => false,
            'is_staff2' => false,
        ]);
    }
}
