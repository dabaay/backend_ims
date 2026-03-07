<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'admin'],
            [
                'full_name'     => 'Administrator',
                'email'         => null,
                'phone'         => null,
                'role'          => 'admin',
                'password_hash' => Hash::make('admin123'),
                'is_enabled'    => true,
                'is_online'     => false,
                'plain_password'=> null,
            ]
        );
    }
}
