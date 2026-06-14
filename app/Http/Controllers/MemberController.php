<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    // ─── Tampilkan semua anggota (juga dipakai di halaman About) ─────────────
    public function index()
    {
        $members = Member::latest()->get();
        return view('members.index', compact('members'));
    }

    // ─── Form tambah anggota ──────────────────────────────────────────────────
    public function create()
    {
        return view('members.create');
    }

    // ─── Simpan anggota baru ──────────────────────────────────────────────────
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:100',
            'nim'        => 'required|string|max:20|unique:members,nim',
            'role'       => 'nullable|string|max:100',
            'github_url' => 'nullable|url|max:255',
            'bio'        => 'nullable|string|max:500',
            'photo'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'name.required'  => 'Nama wajib diisi.',
            'nim.required'   => 'NIM wajib diisi.',
            'nim.unique'     => 'NIM sudah terdaftar.',
            'photo.image'    => 'File harus berupa gambar.',
            'photo.max'      => 'Ukuran foto maksimal 2 MB.',
            'github_url.url' => 'URL GitHub tidak valid.',
        ]);

        // Upload foto jika ada
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('members', 'public');
        }

        Member::create($validated);

        return redirect()->route('members.index')
                         ->with('success', 'Anggota berhasil ditambahkan!');
    }

    // ─── Form edit anggota ────────────────────────────────────────────────────
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    // ─── Simpan perubahan anggota ─────────────────────────────────────────────
    public function update(Request $request, Member $member)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:100',
            'nim'        => 'required|string|max:20|unique:members,nim,' . $member->id,
            'role'       => 'nullable|string|max:100',
            'github_url' => 'nullable|url|max:255',
            'bio'        => 'nullable|string|max:500',
            'photo'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'name.required'  => 'Nama wajib diisi.',
            'nim.required'   => 'NIM wajib diisi.',
            'nim.unique'     => 'NIM sudah terdaftar.',
            'photo.image'    => 'File harus berupa gambar.',
            'photo.max'      => 'Ukuran foto maksimal 2 MB.',
            'github_url.url' => 'URL GitHub tidak valid.',
        ]);

        // Ganti foto jika ada upload baru
        if ($request->hasFile('photo')) {
            // Hapus foto lama dari storage
            if ($member->photo) {
                Storage::disk('public')->delete($member->photo);
            }
            $validated['photo'] = $request->file('photo')->store('members', 'public');
        }

        $member->update($validated);

        return redirect()->route('members.index')
                         ->with('success', 'Data anggota berhasil diperbarui!');
    }

    // ─── Hapus anggota ────────────────────────────────────────────────────────
    public function destroy(Member $member)
    {
        if ($member->photo) {
            Storage::disk('public')->delete($member->photo);
        }
        $member->delete();

        return redirect()->route('members.index')
                         ->with('success', 'Anggota berhasil dihapus.');
    }
}