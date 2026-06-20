<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Bikin (atau reset password) akun admin untuk login.
     * Ganti email & password di bawah sesuai yang kamu mau.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'nabilashifa@gmail.com'],
            [
                'name' => 'nabilashifa',
                'password' => Hash::make('bilshif123'),
                'email_verified_at' => now(),
            ]
        );
    }
}