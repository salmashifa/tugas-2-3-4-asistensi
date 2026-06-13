<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKelompok;
use App\Models\Kelompok;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class AnggotaKelompokController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * GET /kelompok/{kelompok}/anggota/create  [ADMIN ONLY]
     */
    public function create(Kelompok $kelompok): View
    {
        return view('anggota.create', compact('kelompok'));
    }

    /**
     * POST /kelompok/{kelompok}/anggota  [ADMIN ONLY]
     */
    public function store(Request $request, Kelompok $kelompok): RedirectResponse
    {
        $validated = $request->validate([
            'nama'  => 'required|string|max:100',
            'nim'   => 'required|string|max:20|unique:anggota_kelompoks,nim',
            'email' => 'nullable|email|max:100',
            'github'=> 'nullable|url|max:200',
            'peran' => 'required|in:Ketua,Anggota',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('anggota', 'public');
        }

        $kelompok->anggota()->create($validated);

        return redirect()->route('kelompok.show', $kelompok)
            ->with('success', 'Anggota berhasil ditambahkan!');
    }

    /**
     * GET /kelompok/{kelompok}/anggota/{anggota}/edit  [ADMIN ONLY]
     */
    public function edit(Kelompok $kelompok, AnggotaKelompok $anggota): View
    {
        return view('anggota.edit', compact('kelompok', 'anggota'));
    }

    /**
     * PUT /kelompok/{kelompok}/anggota/{anggota}  [ADMIN ONLY]
     */
    public function update(Request $request, Kelompok $kelompok, AnggotaKelompok $anggota): RedirectResponse
    {
        $validated = $request->validate([
            'nama'  => 'required|string|max:100',
            'nim'   => 'required|string|max:20|unique:anggota_kelompoks,nim,' . $anggota->id,
            'email' => 'nullable|email|max:100',
            'github'=> 'nullable|url|max:200',
            'peran' => 'required|in:Ketua,Anggota',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($anggota->foto) {
                Storage::disk('public')->delete($anggota->foto);
            }
            $validated['foto'] = $request->file('foto')->store('anggota', 'public');
        }

        $anggota->update($validated);

        return redirect()->route('kelompok.show', $kelompok)
            ->with('success', 'Data anggota berhasil diperbarui!');
    }

    /**
     * DELETE /kelompok/{kelompok}/anggota/{anggota}  [ADMIN ONLY]
     */
    public function destroy(Kelompok $kelompok, AnggotaKelompok $anggota): RedirectResponse
    {
        if ($anggota->foto) {
            Storage::disk('public')->delete($anggota->foto);
        }
        $anggota->delete();

        return redirect()->route('kelompok.show', $kelompok)
            ->with('success', 'Anggota berhasil dihapus.');
    }
}