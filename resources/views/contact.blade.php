<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami | Nabila Shifa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        .gradient-text {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 60%, #60a5fa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-bg {
            background: radial-gradient(ellipse 80% 60% at 50% -10%, #dbeafe 0%, transparent 70%);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #3b82f6;
            transition: width 0.25s ease;
        }
        .nav-link:hover::after { width: 100%; }
        .nav-link.active::after { width: 100%; }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

    <nav class="bg-white/90 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 w-full">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="/" class="flex items-center gap-2.5" style="text-decoration:none;">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-700 to-blue-400 flex items-center justify-center shadow-md shadow-blue-200">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                            <polyline points="2 17 12 22 22 17"/>
                            <polyline points="2 12 12 17 22 12"/>
                        </svg>
                    </div>
                    <span class="font-extrabold text-slate-800 text-base tracking-tight">Nabila<span class="text-blue-600">Shifa</span></span>
                </a>

                <div class="hidden sm:flex items-center gap-8">
                    <a href="/" class="nav-link text-slate-500 hover:text-slate-800 font-medium text-sm transition-colors" style="text-decoration:none;">Home</a>
                    <a href="/about" class="nav-link text-slate-500 hover:text-slate-800 font-medium text-sm transition-colors" style="text-decoration:none;">About</a>
                    <a href="/contact" class="nav-link active text-blue-700 font-semibold text-sm" style="text-decoration:none;">Contact</a>
                </div>

                <a href="/contact" class="hidden sm:inline-flex items-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-lg transition-colors shadow-sm shadow-blue-200" style="text-decoration:none;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    <header class="hero-bg pt-16 pb-12 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full mb-6">
                <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse inline-block"></span>
                Hubungi Kelompok Kami
            </div>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tighter mb-4">
                Ada Pertanyaan? <br><span class="gradient-text">Kirim Pesan Sekarang</span>
            </h1>
            <p class="text-base text-slate-500 max-w-xl mx-auto leading-relaxed">
                Silakan isi form di bawah untuk mengirim masukan, pertanyaan, atau sekadar berdiskusi mengenai proyek Pemrograman Web 1 kami.
            </p>
        </div>
    </header>

    <section class="pb-24 px-4 bg-slate-50">
        <div class="max-w-4xl mx-auto pt-12">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl text-sm font-medium shadow-sm flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-2xl p-6 sm:p-10 border border-slate-100 shadow-xl shadow-blue-100/40 mb-16">
                <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Formulir Kontak
                </h2>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Nama Lengkap</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all bg-slate-50/50">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Alamat Email</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all bg-slate-50/50">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Subjek Pesan</label>
                        <input type="text" name="subject" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all bg-slate-50/50">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Isi Pesan</label>
                        <textarea name="message" rows="4" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all bg-slate-50/50"></textarea>
                    </div>
                    <button type="submit" class="w-full sm:w-auto px-6 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl text-sm shadow-md shadow-blue-200 transition-all cursor-pointer">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-md overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/70">
                    <h3 class="font-bold text-slate-800 text-sm">Daftar Pesan Masuk (Data CRUD)</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-600">
                        <thead class="bg-slate-50 text-xs text-slate-400 font-semibold uppercase tracking-wider border-b border-slate-100">
                            <tr>
                                <th class="px-6 py-3">Pengirim</th>
                                <th class="px-6 py-3">Subjek & Pesan</th>
                                <th class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($messages as $msg)
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="font-semibold text-slate-800">{{ $msg->name }}</div>
                                        <div class="text-xs text-slate-400">{{ $msg->email }}</div>
                                    </td>
                                    <td class="px-6 py-4 max-w-xs">
                                        <div class="font-medium text-slate-700">{{ $msg->subject }}</div>
                                        <p class="text-xs text-slate-400 truncate">{{ $msg->message }}</p>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            
                                            <button onclick="toggleEditForm({{ $msg->id }})" class="p-2 text-amber-600 hover:bg-amber-50 rounded-lg transition-colors cursor-pointer" title="Edit">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                            </button>

                                            <form action="{{ route('contact.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors cursor-pointer" title="Hapus">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>

                                <tr id="edit-row-{{ $msg->id }}" class="hidden bg-blue-50/40">
                                    <td colspan="3" class="px-6 py-4">
                                        <form action="{{ route('contact.update', $msg->id) }}" method="POST" class="space-y-3">
                                            @csrf
                                            @method('PUT')
                                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                                <input type="text" name="name" value="{{ $msg->name }}" required class="px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-blue-500">
                                                <input type="email" name="email" value="{{ $msg->email }}" required class="px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-blue-500">
                                                <input type="text" name="subject" value="{{ $msg->subject }}" required class="px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-blue-500">
                                            </div>
                                            <textarea name="message" rows="2" required class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs focus:outline-none focus:border-blue-500">{{ $msg->message }}</textarea>
                                            <div class="flex justify-end gap-2">
                                                <button type="button" onclick="toggleEditForm({{ $msg->id }})" class="px-3 py-1.5 bg-slate-200 text-slate-700 font-medium rounded-lg text-xs cursor-pointer">Batal</button>
                                                <button type="submit" class="px-3 py-1.5 bg-blue-600 text-white font-medium rounded-lg text-xs cursor-pointer">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-8 text-center text-slate-400 text-xs">Belum ada pesan masuk.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-slate-900 text-slate-400 pt-14 pb-8 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-800">
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-2.5 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-600 to-blue-400 flex items-center justify-center">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                                <polyline points="2 17 12 22 22 17"/>
                                <polyline points="2 12 12 17 22 12"/>
                            </svg>
                        </div>
                        <span class="font-extrabold text-white text-base">Nabila<span class="text-blue-400">Shifa</span></span>
                    </div>
                    <p class="text-sm leading-relaxed max-w-xs">
                        Platform web sederhana yang dibangun sebagai proyek tugas kelompok mata kuliah Pemrograman Web 1.
                    </p>
                </div>
                <div>
                    <p class="text-white font-semibold text-sm mb-4">Navigasi</p>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/" class="hover:text-white transition-colors" style="text-decoration:none;">Home</a></li>
                        <li><a href="/about" class="hover:text-white transition-colors" style="text-decoration:none;">About</a></li>
                        <li><a href="/contact" class="hover:text-white transition-colors" style="text-decoration:none;">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <p class="text-white font-semibold text-sm mb-4">Teknologi</p>
                    <ul class="space-y-3 text-sm">
                        <li><span>PHP</span></li>
                        <li><span>HTML & CSS</span></li>
                        <li><span>Tailwind CSS</span></li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs">
                <p>&copy; {{ date('Y') }} NabilaShifa. All rights reserved.</p>
                <p>Dibuat dengan <span class="text-blue-400">♥</span> untuk Tugas Pemrograman Web 1</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleEditForm(id) {
            const row = document.getElementById(`edit-row-${id}`);
            if (row.classList.contains('hidden')) {
                row.classList.remove('hidden');
            } else {
                row.classList.add('hidden');
            }
        }
    </script>
</body>
</html>