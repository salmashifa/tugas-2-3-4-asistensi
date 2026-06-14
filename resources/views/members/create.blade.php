@extends('layouts.app')

@section('title', 'Tambah Anggota | NabilaShifa')

@section('content')

    {{-- ══ HERO ══ --}}
    <header style="background: radial-gradient(ellipse 80% 60% at 50% -10%, #dbeafe 0%, transparent 70%);" class="pt-16 pb-14 px-4">
        <div class="max-w-3xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full mb-6">
                <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse inline-block"></span>
                Manajemen Anggota
            </div>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tighter leading-[1.1] mb-4">
                Tambah <span class="gradient-text">Anggota Baru</span>
            </h1>
            <p class="text-base text-slate-500 max-w-md mx-auto leading-relaxed">
                Isi formulir di bawah ini untuk menambahkan anggota baru ke halaman About.
            </p>
        </div>
    </header>

    {{-- ══ FORM ══ --}}
    <section class="py-14 px-4 bg-white">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8 sm:p-10">

                <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    {{-- Nama --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Contoh: Alya Nabila"
                               class="form-input w-full bg-slate-50 border {{ $errors->has('name') ? 'border-red-400' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm text-slate-800 placeholder-slate-400">
                        @error('name') <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    {{-- NIM --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">NIM <span class="text-red-500">*</span></label>
                        <input type="text" name="nim" value="{{ old('nim') }}" placeholder="Contoh: F1B250014"
                               class="form-input w-full bg-slate-50 border {{ $errors->has('nim') ? 'border-red-400' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm text-slate-800 placeholder-slate-400">
                        @error('nim') <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    {{-- Role --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">Peran / Role</label>
                        <input type="text" name="role" value="{{ old('role', 'Anggota Tim') }}" placeholder="Contoh: Frontend Developer"
                               class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder-slate-400">
                        @error('role') <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    {{-- GitHub --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">URL GitHub</label>
                        <input type="url" name="github_url" value="{{ old('github_url') }}" placeholder="https://github.com/username"
                               class="form-input w-full bg-slate-50 border {{ $errors->has('github_url') ? 'border-red-400' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm text-slate-800 placeholder-slate-400">
                        @error('github_url') <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    {{-- Bio --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">Bio Singkat</label>
                        <textarea name="bio" rows="3" placeholder="Deskripsi singkat tentang anggota..."
                                  class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder-slate-400 resize-none">{{ old('bio') }}</textarea>
                        @error('bio') <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    {{-- Foto --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">Foto Profil</label>
                        <div class="border-2 border-dashed {{ $errors->has('photo') ? 'border-red-300' : 'border-slate-200' }} rounded-xl p-6 text-center bg-slate-50 hover:bg-blue-50 hover:border-blue-300 transition-colors cursor-pointer" onclick="document.getElementById('photo').click()">
                            <svg class="w-8 h-8 text-slate-300 mx-auto mb-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                            <p class="text-sm text-slate-500 font-medium">Klik untuk pilih foto</p>
                            <p class="text-xs text-slate-400 mt-1">JPG, PNG, WEBP — maks. 2 MB</p>
                        </div>
                        <input type="file" id="photo" name="photo" accept="image/*" class="hidden"
                               onchange="document.getElementById('photo-name').textContent = this.files[0]?.name ?? ''">
                        <p id="photo-name" class="text-xs text-blue-600 font-medium mt-2"></p>
                        @error('photo') <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    {{-- Actions --}}
                    <div class="flex flex-col sm:flex-row gap-3 pt-2">
                        <button type="submit"
                                class="flex-1 inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-semibold px-8 py-3.5 rounded-xl shadow-md shadow-blue-200 transition-all text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v14a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
                            Simpan Anggota
                        </button>
                        <a href="{{ route('members.index') }}"
                           class="flex-1 inline-flex items-center justify-center gap-2 bg-slate-100 hover:bg-slate-200 active:scale-95 text-slate-700 font-semibold px-8 py-3.5 rounded-xl transition-all text-sm"
                           style="text-decoration:none;">
                            Batal
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection