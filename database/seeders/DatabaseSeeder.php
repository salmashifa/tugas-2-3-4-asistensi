<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Kelompok;
use App\Models\AnggotaKelompok;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ── Admin User ──────────────────────────────────────────────────────
        User::firstOrCreate(
            ['email' => 'admin@nabilashifa.test'],
            [
                'name'              => 'Admin NabilaShifa',
                'email'             => 'admin@nabilashifa.test',
                'password'          => Hash::make('password123'),
                'role'              => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // ── Data Kelompok ───────────────────────────────────────────────────
        $kelompok = Kelompok::firstOrCreate(
            ['nama_kelompok' => 'NabilaShifa'],
            [
                'nama_kelompok'    => 'NabilaShifa',
                'mata_kuliah'      => 'Pemrograman Web 1',
                'dosen_pembimbing' => 'Dosen Asistensi',
                'deskripsi'        => 'Kelompok yang mengerjakan Tugas 3 Asistensi Mata Kuliah Pemrograman Web 1, Program Studi Sistem Informasi, Universitas Al-Ghifari.',
                'status'           => 'aktif',
            ]
        );

        AnggotaKelompok::firstOrCreate(
            ['nim' => 'F1B250014'],
            [
                'kelompok_id' => $kelompok->id,
                'nama'        => 'Alya Nabila',
                'nim'         => 'F1B250014',
                'github'      => 'https://github.com/nbilaalya2406-eng',
                'peran'       => 'Ketua',
            ]
        );

        AnggotaKelompok::firstOrCreate(
            ['nim' => 'F1B250010'],
            [
                'kelompok_id' => $kelompok->id,
                'nama'        => 'Shifa Salma',
                'nim'         => 'F1B250010',
                'github'      => 'https://github.com/salmashifa',
                'peran'       => 'Anggota',
            ]
        );
    }
} 