<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KelompokController extends Controller
{
    // ── Constructor: middleware admin untuk CUD ───────────────────────────────
    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except(['index', 'show']);
    }

    /**
     * GET /kelompok
     * Tampilkan semua kelompok (publik).
     */
    public function index(): View
    {
        $kelompoks = Kelompok::with('anggota')
            ->latest()
            ->paginate(10);

        return view('kelompok.index', compact('kelompoks'));
    }

    /**
     * GET /kelompok/create  [ADMIN ONLY]
     * Form tambah kelompok baru.
     */
    public function create(): View
    {
        return view('kelompok.create');
    }

    /**
     * POST /kelompok  [ADMIN ONLY]
     * Simpan kelompok baru ke database.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama_kelompok'    => 'required|string|max:100',
            'mata_kuliah'      => 'required|string|max:100',
            'dosen_pembimbing' => 'nullable|string|max:100',
            'deskripsi'        => 'nullable|string|max:1000',
            'status'           => 'required|in:aktif,selesai,pending',
        ]);

        Kelompok::create($validated);

        return redirect()->route('kelompok.index')
            ->with('success', 'Kelompok berhasil ditambahkan!');
    }

    /**
     * GET /kelompok/{id}
     * Detail satu kelompok beserta anggotanya (publik).
     */
    public function show(Kelompok $kelompok): View
    {
        $kelompok->load('anggota');
        return view('kelompok.show', compact('kelompok'));
    }

    /**
     * GET /kelompok/{id}/edit  [ADMIN ONLY]
     * Form edit kelompok.
     */
    public function edit(Kelompok $kelompok): View
    {
        $kelompok->load('anggota');
        return view('kelompok.edit', compact('kelompok'));
    }

    /**
     * PUT /kelompok/{id}  [ADMIN ONLY]
     * Update data kelompok.
     */
    public function update(Request $request, Kelompok $kelompok): RedirectResponse
    {
        $validated = $request->validate([
            'nama_kelompok'    => 'required|string|max:100',
            'mata_kuliah'      => 'required|string|max:100',
            'dosen_pembimbing' => 'nullable|string|max:100',
            'deskripsi'        => 'nullable|string|max:1000',
            'status'           => 'required|in:aktif,selesai,pending',
        ]);

        $kelompok->update($validated);

        return redirect()->route('kelompok.show', $kelompok)
            ->with('success', 'Data kelompok berhasil diperbarui!');
    }

    /**
     * DELETE /kelompok/{id}  [ADMIN ONLY]
     * Hapus kelompok (anggota ikut terhapus via cascade).
     */
    public function destroy(Kelompok $kelompok): RedirectResponse
    {
        $kelompok->delete();

        return redirect()->route('kelompok.index')
            ->with('success', 'Kelompok berhasil dihapus.');
    }
}