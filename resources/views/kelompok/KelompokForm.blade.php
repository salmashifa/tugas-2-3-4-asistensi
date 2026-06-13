{{--
    Simpan file ini di: resources/views/kelompok/create.blade.php
    Untuk edit.blade.php, ganti @isset($kelompok) menjadi true
    dan sesuaikan action route-nya (lihat komentar di bawah).
--}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($kelompok) ? 'Edit' : 'Tambah' }} Kelompok | NabilaShifa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        .gradient-text { background: linear-gradient(135deg,#1e40af 0%,#3b82f6 60%,#60a5fa 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
        label { display:block; font-size:.875rem; font-weight:600; color:#374151; margin-bottom:.375rem; }
        input, textarea, select {
            width:100%; padding:.625rem .875rem;
            border:1px solid #e2e8f0; border-radius:.75rem;
            font-size:.925rem; color:#1e293b;
            transition: border-color .2s, box-shadow .2s;
            outline: none;
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

        {{-- Back --}}
        <a href="{{ route('kelompok.index') }}" class="inline-flex items-center gap-1.5 text-slate-400 hover:text-blue-600 text-sm font-medium mb-8 transition-colors" style="text-decoration:none;">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Kembali ke Daftar
        </a>

        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8 sm:p-10">
            <div class="mb-8">
                <p class="text-blue-600 font-semibold text-xs uppercase tracking-widest mb-2">{{ isset($kelompok) ? 'Perbarui Data' : 'Tambah Baru' }}</p>
                <h1 class="text-2xl font-extrabold text-slate-900">
                    {{ isset($kelompok) ? 'Edit Kelompok' : 'Tambah <span class="gradient-text">Kelompok</span>' }}
                </h1>
            </div>

            {{-- FORM --}}
            {{--
                Untuk CREATE : action="{{ route('kelompok.store') }}" method="POST"
                Untuk EDIT   : action="{{ route('kelompok.update', $kelompok) }}" method="POST" + @method('PUT')
            --}}
            <form action="{{ isset($kelompok) ? route('kelompok.update', $kelompok) : route('kelompok.store') }}"
                  method="POST" class="space-y-5">
                @csrf
                @isset($kelompok) @method('PUT') @endisset

                {{-- Nama Kelompok --}}
                <div>
                    <label for="nama_kelompok">Nama Kelompok <span class="text-red-500">*</span></label>
                    <input type="text" id="nama_kelompok" name="nama_kelompok"
                           value="{{ old('nama_kelompok', $kelompok->nama_kelompok ?? '') }}"
                           placeholder="Contoh: NabilaShifa">
                    @error('nama_kelompok') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- Mata Kuliah --}}
                <div>
                    <label for="mata_kuliah">Mata Kuliah <span class="text-red-500">*</span></label>
                    <input type="text" id="mata_kuliah" name="mata_kuliah"
                           value="{{ old('mata_kuliah', $kelompok->mata_kuliah ?? '') }}"
                           placeholder="Contoh: Pemrograman Web 1">
                    @error('mata_kuliah') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- Dosen Pembimbing --}}
                <div>
                    <label for="dosen_pembimbing">Dosen Pembimbing</label>
                    <input type="text" id="dosen_pembimbing" name="dosen_pembimbing"
                           value="{{ old('dosen_pembimbing', $kelompok->dosen_pembimbing ?? '') }}"
                           placeholder="Nama dosen (opsional)">
                    @error('dosen_pembimbing') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- Deskripsi --}}
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4"
                              placeholder="Deskripsi singkat kelompok...">{{ old('deskripsi', $kelompok->deskripsi ?? '') }}</textarea>
                    @error('deskripsi') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- Status --}}
                <div>
                    <label for="status">Status <span class="text-red-500">*</span></label>
                    <select id="status" name="status">
                        @foreach(['aktif' => 'Aktif', 'selesai' => 'Selesai', 'pending' => 'Pending'] as $val => $label)
                            <option value="{{ $val }}" {{ old('status', $kelompok->status ?? 'aktif') === $val ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @error('status') <p class="error">{{ $message }}</p> @enderror
                </div>

                {{-- Submit --}}
                <div class="pt-2 flex gap-3">
                    <button type="submit"
                            class="flex-1 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-semibold py-3 rounded-xl transition-all shadow-sm shadow-blue-200">
                        {{ isset($kelompok) ? 'Simpan Perubahan' : 'Tambahkan Kelompok' }}
                    </button>
                    <a href="{{ route('kelompok.index') }}"
                       class="px-6 py-3 bg-white border border-slate-200 text-slate-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors"
                       style="text-decoration:none;">Batal</a>
                </div>
            </form>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>