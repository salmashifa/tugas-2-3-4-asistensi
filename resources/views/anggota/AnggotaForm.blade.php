{{--
    Gunakan file ini untuk KEDUANYA:
    - resources/views/anggota/create.blade.php
    - resources/views/anggota/edit.blade.php  (bedanya $anggota terdefinisi)
--}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($anggota) ? 'Edit' : 'Tambah' }} Anggota | NabilaShifa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        label { display:block; font-size:.875rem; font-weight:600; color:#374151; margin-bottom:.375rem; }
        input, textarea, select {
            width:100%; padding:.625rem .875rem;
            border:1px solid #e2e8f0; border-radius:.75rem;
            font-size:.925rem; color:#1e293b;
            transition: border-color .2s, box-shadow .2s;
            outline:none;
        }
        input:focus, textarea:focus, select:focus {
            border-color:#3b82f6;
            box-shadow: 0 0 0 3px rgba(59,130,246,.12);
        }
        .error { color:#ef4444; font-size:.8rem; margin-top:.25rem; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen">

    @include('partials.navbar', ['active' => 'kelompok'])

    <main class="max-w-2xl mx-auto px-4 py-16">

        <a href="{{ route('kelompok.show', $kelompok) }}" class="inline-flex items-center gap-1.5 text-slate-400 hover:text-blue-600 text-sm font-medium mb-8 transition-colors" style="text-decoration:none;">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Kembali ke {{ $kelompok->nama_kelompok }}
        </a>

        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8 sm:p-10">
            <div class="mb-8">
                <p class="text-blue-600 font-semibold text-xs uppercase tracking-widest mb-2">{{ isset($anggota) ? 'Perbarui Data' : 'Tambah Baru' }}</p>
                <h1 class="text-2xl font-extrabold text-slate-900">{{ isset($anggota) ? 'Edit Anggota' : 'Tambah Anggota' }}</h1>
                <p class="text-sm text-slate-400 mt-1">Kelompok: <strong class="text-slate-600">{{ $kelompok->nama_kelompok }}</strong></p>
            </div>

            <form action="{{ isset($anggota) ? route('anggota.update', [$kelompok, $anggota]) : route('anggota.store', $kelompok) }}"
                  method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @isset($anggota) @method('PUT') @endisset

                {{-- Nama --}}
                <div>
                    <label for="nama">Nama Lengkap <span class="text-red-500">*</span></label>
                    <input type="text" id="nama" name="nama"
                           value="{{ old('nama', $anggota->nama ?? '') }}"
                           placeholder="Nama lengkap anggota">
                    @error('nama') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- NIM --}}
                <div>
                    <label for="nim">NIM <span class="text-red-500">*</span></label>
                    <input type="text" id="nim" name="nim"
                           value="{{ old('nim', $anggota->nim ?? '') }}"
                           placeholder="Contoh: F1B250014">
                    @error('nim') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"
                           value="{{ old('email', $anggota->email ?? '') }}"
                           placeholder="email@example.com">
                    @error('email') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- GitHub --}}
                <div>
                    <label for="github">GitHub URL</label>
                    <input type="url" id="github" name="github"
                           value="{{ old('github', $anggota->github ?? '') }}"
                           placeholder="https://github.com/username">
                    @error('github') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- Peran --}}
                <div>
                    <label for="peran">Peran <span class="text-red-500">*</span></label>
                    <select id="peran" name="peran">
                        @foreach(['Ketua', 'Anggota'] as $p)
                            <option value="{{ $p }}" {{ old('peran', $anggota->peran ?? 'Anggota') === $p ? 'selected' : '' }}>
                                {{ $p }}
                            </option>
                        @endforeach
                    </select>
                    @error('peran') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- Foto --}}
                <div>
                    <label for="foto">Foto (JPG/PNG, max 2MB)</label>
                    @isset($anggota)
                        @if($anggota->foto)
                            <div class="mb-3">
                                <img src="{{ $anggota->foto_url }}" alt="Foto saat ini"
                                     class="w-16 h-16 rounded-full object-cover border-2 border-blue-100">
                                <p class="text-xs text-slate-400 mt-1">Foto saat ini. Upload baru untuk mengganti.</p>
                            </div>
                        @endif
                    @endisset
                    <input type="file" id="foto" name="foto" accept="image/*"
                           class="file:mr-3 file:py-1.5 file:px-4 file:rounded-lg file:border-0 file:bg-blue-50 file:text-blue-700 file:font-semibold file:text-sm hover:file:bg-blue-100">
                    @error('foto') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- Submit --}}
                <div class="pt-2 flex gap-3">
                    <button type="submit"
                            class="flex-1 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-semibold py-3 rounded-xl transition-all shadow-sm shadow-blue-200">
                        {{ isset($anggota) ? 'Simpan Perubahan' : 'Tambahkan Anggota' }}
                    </button>
                    <a href="{{ route('kelompok.show', $kelompok) }}"
                       class="px-6 py-3 bg-white border border-slate-200 text-slate-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors"
                       style="text-decoration:none;">Batal</a>
                </div>
            </form>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>