<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;   
use Illuminate\Validation\ValidationException;

class ApiController extends Controller
{
    // =============================================
    // CONTACT API
    // =============================================

    /**
     * GET /api/contacts
     * Ambil semua pesan masuk
     */
    public function contactIndex(): JsonResponse
    {
        $contacts = Contact::latest()->paginate(10);

        return response()->json([
            'success' => true,
            'message' => 'Data pesan berhasil diambil',
            'data'    => $contacts,
        ]);
    }

    /**
     * POST /api/contacts
     * Kirim pesan baru
     */
    public function contactStore(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'nama'     => ['required', 'string', 'max:255'],
                'email'    => ['required', 'email', 'max:255'],
                'subjek'   => ['required', 'string', 'max:255'],
                'kategori' => ['nullable', 'string'],
                'pesan'    => ['required', 'string', 'min:20'],
            ], [
                'nama.required'   => 'Nama wajib diisi.',
                'email.required'  => 'Email wajib diisi.',
                'email.email'     => 'Format email tidak valid.',
                'subjek.required' => 'Subjek wajib diisi.',
                'pesan.required'  => 'Pesan wajib diisi.',
                'pesan.min'       => 'Pesan minimal 20 karakter.',
            ]);

            $contact = Contact::create([
                'name'    => $validated['nama'],
                'email'   => $validated['email'],
                'subject' => $validated['subjek'],
                'message' => $validated['pesan'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pesan berhasil dikirim',
                'data'    => $contact,
            ], 201);

        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors'  => $e->errors(),
            ], 422);
        }
    }

    /**
     * DELETE /api/contacts/{id}
     * Hapus pesan berdasarkan ID
     */
    public function contactDestroy($id): JsonResponse
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Pesan tidak ditemukan',
            ], 404);
        }

        $contact->delete();

        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dihapus',
        ]);
    }

    // =============================================
    // MEMBER API
    // =============================================

    /**
     * GET /api/members
     * Ambil semua data anggota
     */
    public function memberIndex(): JsonResponse
    {
        $members = Member::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Data anggota berhasil diambil',
            'data'    => $members,
        ]);
    }

    // =============================================
    // HOME / TEAM API
    // =============================================

    /**
     * GET /api/team
     * Ambil data anggota kelompok
     */
    public function teamIndex(): JsonResponse
    {
        $teamMembers = [
            [
                'name'   => 'Nama Kamu',
                'role'   => 'Project Leader / Developer',
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&h=256&fit=crop',
            ],
            [
                'name'   => 'Nama Temanmu',
                'role'   => 'UI/UX Designer / Developer',
                'avatar' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=256&h=256&fit=crop',
            ],
        ];

        return response()->json([
            'success' => true,
            'message' => 'Data tim berhasil diambil',
            'data'    => $teamMembers,
        ]);
    }
}