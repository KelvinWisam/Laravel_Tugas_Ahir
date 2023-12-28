<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Admin
        User::create([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@email.test',
            'password' => Hash::make('password'),
        ]);

        // Staff
        User::create([
            'role_id' => 2,
            'name' => 'Staff',
            'email' => 'staff@email.test',
            'password' => Hash::make('password'),
        ]);
    }
}
