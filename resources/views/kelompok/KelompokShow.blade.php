<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $kelompok->nama_kelompok }} | NabilaShifa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        .gradient-text { background: linear-gradient(135deg,#1e40af 0%,#3b82f6 60%,#60a5fa 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
        .card-hover { transition: transform .2s ease, box-shadow .2s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -12px rgba(59,130,246,.15); }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

    @include('partials.navbar', ['active' => 'kelompok'])

    {{-- HERO --}}
    <header class="bg-gradient-to-br from-slate-900 to-blue-950 pt-16 pb-20 px-4">
        <div class="max-w-4xl mx-auto">
            <a href="{{ route('kelompok.index') }}" class="inline-flex items-center gap-1.5 text-slate-400 hover:text-white text-sm font-medium mb-8 transition-colors" style="text-decoration:none;">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                Daftar Kelompok
            </a>

            <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-6">
                <div>
                    <span class="inline-block text-xs font-semibold px-3 py-1 rounded-full mb-4
                        {{ $kelompok->status === 'aktif' ? 'bg-green-500/20 text-green-300' :
                           ($kelompok->status === 'selesai' ? 'bg-blue-400/20 text-blue-300' : 'bg-yellow-500/20 text-yellow-300') }}">
                        {{ ucfirst($kelompok->status) }}
                    </span>
                    <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight mb-3">
                        {{ $kelompok->nama_kelompok }}
                    </h1>
                    <p class="text-slate-400 text-base">{{ $kelompok->mata_kuliah }}</p>
                    @if($kelompok->dosen_pembimbing)
                        <p class="text-slate-500 text-sm mt-1">Dosen: {{ $kelompok->dosen_pembimbing }}</p>
                    @endif
                </div>

                @auth
                    @if(auth()->user()->isAdmin())
                        <div class="flex items-center gap-3 flex-shrink-0">
                            <a href="{{ route('kelompok.edit', $kelompok) }}"
                               class="inline-flex items-center gap-1.5 bg-white/10 hover:bg-white/20 text-white text-sm font-semibold px-4 py-2.5 rounded-xl transition-colors border border-white/20"
                               style="text-decoration:none;">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                Edit
                            </a>
                            <form action="{{ route('kelompok.destroy', $kelompok) }}" method="POST"
                                  onsubmit="return confirm('Hapus kelompok beserta semua anggotanya?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="inline-flex items-center gap-1.5 bg-red-500/20 hover:bg-red-500/30 text-red-300 text-sm font-semibold px-4 py-2.5 rounded-xl transition-colors border border-red-500/30">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 py-14">

        {{-- Alert --}}
        @if(session('success'))
            <div class="mb-8 bg-green-50 border border-green-200 text-green-800 px-5 py-3.5 rounded-xl text-sm font-medium flex items-center gap-2">
                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                {{ session('success') }}
            </div>
        @endif

        {{-- Deskripsi --}}
        @if($kelompok->deskripsi)
            <div class="bg-blue-50 border border-blue-100 rounded-2xl p-7 mb-10 flex gap-4 items-start">
                <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                </div>
                <div>
                    <p class="text-blue-800 font-semibold text-sm mb-1">Deskripsi Kelompok</p>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ $kelompok->deskripsi }}</p>
                </div>
            </div>
        @endif

        {{-- Anggota Header --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
            <div>
                <p class="text-blue-600 font-semibold text-xs uppercase tracking-widest mb-1">Tim Kelompok</p>
                <h2 class="text-2xl font-extrabold text-slate-900">Anggota ({{ $kelompok->anggota->count() }})</h2>
            </div>
            @auth
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('anggota.create', $kelompok) }}"
                       class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors shadow-sm shadow-blue-200"
                       style="text-decoration:none;">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        Tambah Anggota
                    </a>
                @endif
            @endauth
        </div>

        {{-- Anggota Grid --}}
        @if($kelompok->anggota->isEmpty())
            <div class="text-center py-16 text-slate-400 border border-dashed border-slate-200 rounded-2xl">
                <svg class="w-10 h-10 mx-auto mb-3 opacity-40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                <p class="font-medium">Belum ada anggota. Tambahkan anggota pertama!</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($kelompok->anggota as $anggota)
                    <div class="card-hover bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                        <div class="bg-gradient-to-br from-blue-700 to-blue-500 p-7 text-center">
                            <img src="{{ $anggota->foto_url }}"
                                 alt="{{ $anggota->nama }}"
                                 class="w-20 h-20 rounded-full object-cover border-4 border-white/40 mx-auto">
                        </div>
                        <div class="p-6 text-center">
                            <span class="inline-block text-xs font-bold px-2 py-0.5 rounded-full mb-2
                                {{ $anggota->peran === 'Ketua' ? 'bg-amber-50 text-amber-600' : 'bg-blue-50 text-blue-600' }}">
                                {{ $anggota->peran }}
                            </span>
                            <h3 class="text-base font-bold text-slate-800 mb-1">{{ $anggota->nama }}</h3>
                            <span class="inline-block bg-slate-100 text-slate-600 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                                {{ $anggota->nim }}
                            </span>
                            @if($anggota->email)
                                <p class="text-xs text-slate-400 mb-3">{{ $anggota->email }}</p>
                            @endif
                            <div class="w-8 h-0.5 bg-blue-100 rounded mx-auto mb-4"></div>
                            <div class="flex items-center justify-center gap-2">
                                @if($anggota->github)
                                    <a href="{{ $anggota->github }}" target="_blank"
                                       class="inline-flex items-center gap-1.5 bg-slate-800 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-1.5 rounded-full transition-colors"
                                       style="text-decoration:none;">
                                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.021c0 4.428 2.865 8.184 6.839 9.504.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.342-3.369-1.342-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.026 2.747-1.026.546 1.378.202 2.397.1 2.65.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.944.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.579.688.481C19.138 20.2 22 16.447 22 12.021 22 6.484 17.522 2 12 2z"/></svg>
                                        GitHub
                                    </a>
                                @endif
                                @auth
                                    @if(auth()->user()->isAdmin())
                                        <a href="{{ route('anggota.edit', [$kelompok, $anggota]) }}"
                                           class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors"
                                           style="text-decoration:none;" title="Edit">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                        </a>
                                        <form action="{{ route('anggota.destroy', [$kelompok, $anggota]) }}" method="POST"
                                              onsubmit="return confirm('Hapus anggota {{ $anggota->nama }}?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="p-1.5 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors" title="Hapus">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg>
                                            </button>
                                        </form>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </main>

    @include('partials.footer')
</body>
</html>