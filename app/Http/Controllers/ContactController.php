<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Tampilkan halaman contact.
     */
    public function index(): View
    {
        return view('contact');
    }

    /**
     * Tampilkan daftar pesan masuk (khusus admin/login).
     */
    public function adminIndex(): View
    {
        $contacts = Contact::latest()->paginate(10);

        return view('admin.pesan', compact('contacts'));
    }

    /**
     * Hapus satu pesan.
     */
    public function destroy($id): RedirectResponse
    {
        Contact::findOrFail($id)->delete();

        return redirect()
            ->route('contact.admin')
            ->with('success', 'Pesan berhasil dihapus.');
    }

    /**
     * Simpan pesan yang dikirim lewat form contact.
     */
    public function store(Request $request): RedirectResponse
    {
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

        Contact::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Terima kasih. Tim kami akan menghubungi kamu segera.');
    }
}

