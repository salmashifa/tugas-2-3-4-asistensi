<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Masuk | NabilaShifa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navbar sederhana -->
    <nav class="bg-white border-b border-slate-100 sticky top-0 z-50 w-full">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5" style="text-decoration:none;">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-700 to-blue-400 flex items-center justify-center shadow-md shadow-blue-200">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>
                        </svg>
                    </div>
                    <span class="font-extrabold text-slate-800 text-base tracking-tight">Nabila<span class="text-blue-600">Shifa</span></span>
                </a>
                <a href="{{ route('dashboard') }}" class="text-sm font-medium text-slate-500 hover:text-slate-800 transition-colors" style="text-decoration:none;">&larr; Kembali ke Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <div class="mb-8">
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Pesan Masuk</h1>
            <p class="text-slate-500 text-sm mt-1">Daftar pesan yang dikirim lewat halaman contact.</p>
        </div>

        @if (session('success'))
        <div class="mb-6 flex items-start gap-3 bg-green-50 border border-green-200 rounded-xl px-5 py-4">
            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <p class="text-sm font-semibold text-green-800">{{ session('success') }}</p>
        </div>
        @endif

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
            @forelse ($contacts as $contact)
            <div class="p-6 {{ !$loop->last ? 'border-b border-slate-100' : '' }}">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-2 mb-2">
                            <p class="font-bold text-slate-800">{{ $contact->nama }}</p>
                            <span class="text-slate-300">&bull;</span>
                            <p class="text-sm text-slate-500">{{ $contact->email }}</p>
                            @if ($contact->kategori)
                            <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-2.5 py-0.5 rounded-full">{{ ucfirst($contact->kategori) }}</span>
                            @endif
                        </div>
                        <p class="font-semibold text-slate-700 text-sm mb-1">{{ $contact->subjek }}</p>
                        <p class="text-sm text-slate-500 leading-relaxed">{{ $contact->pesan }}</p>
                        <p class="text-xs text-slate-400 mt-3">{{ $contact->created_at->translatedFormat('d M Y, H:i') }}</p>
                    </div>
                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center gap-1.5 text-red-600 hover:bg-red-50 text-xs font-semibold px-3 py-2 rounded-lg transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <div class="p-12 text-center">
                <p class="text-slate-400 text-sm">Belum ada pesan masuk.</p>
            </div>
            @endforelse
        </div>

        @if ($contacts->hasPages())
        <div class="mt-6">
            {{ $contacts->links() }}
        </div>
        @endif

    </div>

</body>
</html>