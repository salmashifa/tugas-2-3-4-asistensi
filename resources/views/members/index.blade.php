@extends('layouts.app')

@section('title', 'About | NabilaShifa')

@section('content')

    <header style="background: radial-gradient(ellipse 80% 60% at 50% -10%, #dbeafe 0%, transparent 70%);" class="pt-20 pb-24 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full mb-8">
                <span class="w-2 h-2 bg-blue-500 rounded-full inline-block"></span>
                Kelompok Asistensi — Sistem Informasi Al-Ghifari
            </div>
            <h1 class="text-5xl sm:text-6xl font-extrabold text-slate-900 tracking-tighter leading-[1.1] mb-6">
                Tentang<br><span class="gradient-text">Tim Kami</span>
            </h1>
            <p class="text-lg text-slate-500 max-w-xl mx-auto leading-relaxed mb-10">
                Kami adalah mahasiswi Program Studi Sistem Informasi Universitas Al-Ghifari yang mengerjakan proyek ini sebagai bagian dari Asistensi Mata Kuliah Pemrograman Web 1.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-8 sm:gap-16 text-center">
                <div><p class="text-3xl font-extrabold text-slate-800">{{ $members->count() }}</p><p class="text-sm text-slate-400 mt-0.5">Anggota Tim</p></div>
                <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                <div><p class="text-3xl font-extrabold text-slate-800">Laravel</p><p class="text-sm text-slate-400 mt-0.5">Framework</p></div>
                <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                <div><p class="text-3xl font-extrabold text-slate-800">SI</p><p class="text-sm text-slate-400 mt-0.5">Program Studi</p></div>
            </div>
        </div>
    </header>

    <section class="py-20 px-4 bg-slate-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-14">
                <p class="text-blue-600 font-semibold text-sm uppercase tracking-widest mb-3">Proyek Kami</p>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Tentang Halaman Ini</h2>
            </div>
            <div class="bg-gradient-to-br from-slate-900 to-blue-950 rounded-3xl overflow-hidden mb-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                    <div class="p-10 sm:p-14 flex flex-col justify-center">
                        <p class="text-blue-400 font-semibold text-xs uppercase tracking-widest mb-4">Latar Belakang</p>
                        <h3 class="text-3xl font-extrabold text-white tracking-tight leading-snug mb-5">Lebih dari Sekadar<br>Tugas Kuliah</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Halaman ini merupakan bagian dari proyek Asistensi mata kuliah Pemrograman Web 1. Dibangun menggunakan framework <strong class="text-white">Laravel</strong> dengan tampilan modern dan responsif.</p>
                    </div>
                    <div class="bg-white/5 border-l border-white/10 p-10 sm:p-14 flex flex-col justify-center gap-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg>
                            </div>
                            <div><p class="text-white font-semibold text-sm">Mata Kuliah</p><p class="text-slate-400 text-sm mt-0.5">Pemrograman Web 1 — Asistensi Tugas 3 & 4</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                            </div>
                            <div><p class="text-white font-semibold text-sm">Program Studi</p><p class="text-slate-400 text-sm mt-0.5">Sistem Informasi — Universitas Al-Ghifari</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                            </div>
                            <div><p class="text-white font-semibold text-sm">Teknologi</p><p class="text-slate-400 text-sm mt-0.5">PHP, Laravel, Tailwind CSS, MySQL</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="card-hover bg-white rounded-2xl p-7 border border-slate-100 shadow-sm text-center">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <p class="text-3xl font-extrabold text-blue-600 mb-1">{{ $members->count() }}</p>
                    <p class="text-sm text-slate-400 uppercase tracking-widest font-medium">Anggota Tim</p>
                </div>
                <div class="card-hover bg-white rounded-2xl p-7 border border-slate-100 shadow-sm text-center">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg>
                    </div>
                    <p class="text-xl font-extrabold text-blue-600 mb-1">Sistem Informasi</p>
                    <p class="text-sm text-slate-400 uppercase tracking-widest font-medium">Program Studi</p>
                </div>
                <div class="card-hover bg-gradient-to-br from-blue-600 to-blue-500 rounded-2xl p-7 shadow-lg shadow-blue-200 text-center">
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </div>
                    <p class="text-3xl font-extrabold text-white mb-1">Laravel</p>
                    <p class="text-sm text-blue-100 uppercase tracking-widest font-medium">Framework</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-14">
                <div>
                    <p class="text-blue-600 font-semibold text-sm uppercase tracking-widest mb-3">Tim Kelompok</p>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Anggota Kami</h2>
                    <p class="mt-2 text-slate-500 max-w-lg text-base">Mahasiswi yang berkolaborasi membangun proyek ini dengan penuh semangat.</p>
                </div>
                <a href="{{ route('members.create') }}"
                   class="self-start sm:self-auto inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white text-sm font-semibold px-5 py-3 rounded-xl shadow-md shadow-blue-200 transition-all"
                   style="text-decoration:none;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    Tambah Anggota
                </a>
            </div>

            @if($members->isEmpty())
            <div class="text-center py-20 bg-slate-50 rounded-3xl border border-slate-100">
                <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                </div>
                <p class="text-slate-500 font-medium text-sm">Belum ada anggota. Klik <strong>Tambah Anggota</strong> untuk memulai.</p>
            </div>
            @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($members as $member)
                <div class="member-card-hover bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-br from-blue-700 to-blue-500 p-8 text-center">
                        @if($member->photo)
                            <img src="{{ Storage::url($member->photo) }}"
                                 class="w-24 h-24 rounded-full object-cover object-top border-4 border-white/40 mx-auto"
                                 alt="{{ $member->name }}">
                        @else
                            <div class="w-24 h-24 rounded-full bg-white/20 mx-auto flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                        @endif
                    </div>
                    <div class="p-7 text-center">
                        <h3 class="text-lg font-bold text-slate-800 mb-2">{{ $member->name }}</h3>
                        <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full mb-3">NIM: {{ $member->nim }}</span>
                        @if($member->role)
                        <p class="text-xs text-slate-400 font-medium uppercase tracking-widest mb-3">{{ $member->role }}</p>
                        @endif
                        @if($member->bio)
                        <p class="text-sm text-slate-500 mb-4 leading-relaxed">{{ $member->bio }}</p>
                        @endif
                        <div class="w-8 h-0.5 bg-blue-100 rounded mx-auto mb-5"></div>
                        <div class="flex items-center justify-center gap-2 flex-wrap">
                            @if($member->github_url)
                            <a href="{{ $member->github_url }}" target="_blank"
                               class="inline-flex items-center gap-1.5 bg-slate-800 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-2 rounded-full transition-colors"
                               style="text-decoration:none;">
                                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.021c0 4.428 2.865 8.184 6.839 9.504.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.342-3.369-1.342-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.026 2.747-1.026.546 1.378.202 2.397.1 2.65.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.944.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.579.688.481C19.138 20.2 22 16.447 22 12.021 22 6.484 17.522 2 12 2z"/></svg>
                                GitHub
                            </a>
                            @endif
                            <a href="{{ route('members.edit', $member) }}"
                               class="inline-flex items-center gap-1.5 bg-blue-50 hover:bg-blue-100 text-blue-700 text-xs font-semibold px-4 py-2 rounded-full transition-colors"
                               style="text-decoration:none;">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                                Edit
                            </a>
                            <form action="{{ route('members.destroy', $member) }}" method="POST"
                                  onsubmit="return confirm('Hapus anggota {{ $member->name }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center gap-1.5 bg-red-50 hover:bg-red-100 text-red-600 text-xs font-semibold px-4 py-2 rounded-full transition-colors">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6M14 11v6"/><path d="M9 6V4h6v2"/></svg>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <section class="py-16 px-4 bg-slate-50 border-t border-slate-100">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-4">Tertarik Menghubungi Kami?</h2>
            <p class="text-slate-500 text-sm mb-8">Kirim pesan melalui halaman kontak kami dan kami akan segera merespons.</p>
            <a href="/contact" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-semibold px-8 py-3.5 rounded-xl shadow-md shadow-blue-200 transition-all" style="text-decoration:none;">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Buka Halaman Kontak
            </a>
        </div>
    </section>

@endsection