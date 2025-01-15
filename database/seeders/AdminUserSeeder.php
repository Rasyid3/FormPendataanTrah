<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin1',
            'email' => 'rasnaf@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
