<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    // READ - Menampilkan halaman kontak (Form input + List data CRUD di bawahnya)
    // public function index()
    // {
    //     $messages = Contact::latest()->get();
    //     return view('contact', compact('messages'));
    // }
    public function index()
    {
    $messages = Contact::latest()->get(); 
    
    // Paksa Laravel membaca file contact yang berada langsung di folder views utama
    return view('contact', compact('messages')); 
    }

    // CREATE - Menyimpan pesan baru dari form kontak
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }

    // UPDATE - Mengedit pesan (bisa digunakan untuk panel admin / demonstrasi tugas CRUD)
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($validated);

        return redirect()->back()->with('success', 'Pesan berhasil diperbarui!');
    }

    // DELETE - Menghapus pesan
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Pesan berhasil dihapus!');
    }
}