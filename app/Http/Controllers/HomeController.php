<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data anggota kelompok (2 orang)
        $teamMembers = [
            [
                'name' => 'Nama Kamu',
                'role' => 'Project Leader / Developer',
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&h=256&fit=crop'
            ],
            [
                'name' => 'Nama Temanmu',
                'role' => 'UI/UX Designer / Developer',
                'avatar' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=256&h=256&fit=crop'
            ],
        ];

        // Mengirim data ke halaman 'home.blade.php'
        return view('home', compact('teamMembers'));
    }
}