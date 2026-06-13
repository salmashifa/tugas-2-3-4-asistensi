<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelompok | NabilaShifa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        .gradient-text { background: linear-gradient(135deg, #1e40af 0%, #3b82f6 60%, #60a5fa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .card-hover { transition: transform 0.2s ease, box-shadow 0.2s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -12px rgba(59,130,246,.15); }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

    {{-- NAVBAR --}}
    @include('partials.navbar', ['active' => 'kelompok'])

    {{-- HERO --}}
    <header style="background: radial-gradient(ellipse 80% 60% at 50% -10%, #dbeafe 0%, transparent 70%);" class="pt-20 pb-16 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full mb-8">
                <span class="w-2 h-2 bg-blue-500 rounded-full inline-block"></span>
                Data Kelompok — Pemrograman Web 1
            </div>
            <h1 class="text-5xl font-extrabold text-slate-900 tracking-tighter leading-[1.1] mb-4">
                Daftar <span class="gradient-text">Kelompok</span>
            </h1>
            <p class="text-lg text-slate-500 max-w-xl mx-auto">Semua kelompok yang terdaftar pada mata kuliah Pemrograman Web 1.</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 py-12">

        {{-- Alert --}}
        @if(session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-5 py-3.5 rounded-xl text-sm font-medium flex items-center gap-2">
                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                {{ session('success') }}
            </div>
        @endif

        {{-- Toolbar (tombol tambah hanya untuk admin) --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
            <h2 class="text-xl font-bold text-slate-800">Semua Kelompok ({{ $kelompoks->total() }})</h2>
            @auth
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('kelompok.create') }}"
                       class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors shadow-sm shadow-blue-200"
                       style="text-decoration:none;">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        Tambah Kelompok
                    </a>
                @endif
            @endauth
        </div>

        {{-- Grid Kelompok --}}
        @if($kelompoks->isEmpty())
            <div class="text-center py-24 text-slate-400">
                <svg class="w-12 h-12 mx-auto mb-4 opacity-40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                <p class="font-medium">Belum ada kelompok terdaftar.</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($kelompoks as $kelompok)
                    <div class="card-hover bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                        {{-- Card Header --}}
                        <div class="bg-gradient-to-br from-blue-700 to-blue-500 p-6">
                            <div class="flex justify-between items-start">
                                <div class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                </div>
                                <span class="text-xs font-semibold px-2.5 py-1 rounded-full
                                    {{ $kelompok->status === 'aktif' ? 'bg-green-400/20 text-green-100' :
                                       ($kelompok->status === 'selesai' ? 'bg-blue-300/20 text-blue-100' : 'bg-yellow-400/20 text-yellow-100') }}">
                                    {{ ucfirst($kelompok->status) }}
                                </span>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-white">{{ $kelompok->nama_kelompok }}</h3>
                            <p class="text-sm text-blue-100 mt-0.5">{{ $kelompok->mata_kuliah }}</p>
                        </div>

                        {{-- Card Body --}}
                        <div class="p-5">
                            @if($kelompok->dosen_pembimbing)
                                <p class="text-xs text-slate-400 mb-3">Dosen: <span class="text-slate-600 font-medium">{{ $kelompok->dosen_pembimbing }}</span></p>
                            @endif
                            @if($kelompok->deskripsi)
                                <p class="text-sm text-slate-500 leading-relaxed line-clamp-2 mb-4">{{ $kelompok->deskripsi }}</p>
                            @endif
                            <p class="text-xs text-slate-400 mb-5">{{ $kelompok->anggota->count() }} Anggota</p>

                            <div class="flex items-center gap-2">
                                <a href="{{ route('kelompok.show', $kelompok) }}"
                                   class="flex-1 text-center text-sm font-semibold text-blue-600 border border-blue-200 hover:bg-blue-50 py-2 rounded-lg transition-colors"
                                   style="text-decoration:none;">Detail</a>

                                @auth
                                    @if(auth()->user()->isAdmin())
                                        <a href="{{ route('kelompok.edit', $kelompok) }}"
                                           class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors"
                                           style="text-decoration:none;" title="Edit">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                        </a>
                                        <form action="{{ route('kelompok.destroy', $kelompok) }}" method="POST"
                                              onsubmit="return confirm('Yakin hapus kelompok ini beserta semua anggotanya?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors" title="Hapus">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6M14 11v6"/><path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/></svg>
                                            </button>
                                        </form>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-10">{{ $kelompoks->links() }}</div>
        @endif
    </main>

    @include('partials.footer')
</body>
</html>