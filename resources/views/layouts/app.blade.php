<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NabilaShifa')</title>
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
        .card-hover { transition: transform 0.2s ease, box-shadow 0.2s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -12px rgba(59,130,246,.15); }
        .member-card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .member-card-hover:hover { transform: translateY(-6px); box-shadow: 0 24px 48px -12px rgba(59,130,246,.2); }
        .nav-link { position: relative; }
        .nav-link::after { content:''; position:absolute; bottom:-2px; left:0; width:0; height:2px; background:#3b82f6; transition:width .25s ease; }
        .nav-link:hover::after, .nav-link.active::after { width:100%; }
        .form-input:focus { outline:none; border-color:#3b82f6; box-shadow:0 0 0 3px rgba(59,130,246,.12); }
        .form-input { transition: border-color .2s ease, box-shadow .2s ease; }
    </style>
    @stack('head')
</head>
<body class="bg-white text-slate-800 antialiased">

    {{-- ══ NAVBAR ══ --}}
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
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active text-blue-700 font-semibold' : 'text-slate-500 hover:text-slate-800 font-medium' }} text-sm transition-colors" style="text-decoration:none;">Home</a>
                    <a href="/about" class="nav-link {{ request()->is('about') || request()->is('members*') ? 'active text-blue-700 font-semibold' : 'text-slate-500 hover:text-slate-800 font-medium' }} text-sm transition-colors" style="text-decoration:none;">About</a>
                    <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active text-blue-700 font-semibold' : 'text-slate-500 hover:text-slate-800 font-medium' }} text-sm transition-colors" style="text-decoration:none;">Contact</a>
                </div>

                <a href="/contact" class="hidden sm:inline-flex items-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-lg transition-colors shadow-sm shadow-blue-200" style="text-decoration:none;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    Hubungi Kami
                </a>

                <button class="sm:hidden p-2 rounded-lg text-slate-500 hover:bg-slate-100 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
            </div>
        </div>
    </nav>

    {{-- ══ FLASH MESSAGES ══ --}}
    @if(session('success'))
    <div class="max-w-6xl mx-auto px-4 pt-5">
        <div class="flex items-start gap-3 bg-green-50 border border-green-200 rounded-xl px-5 py-4">
            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <p class="text-sm font-semibold text-green-800">{{ session('success') }}</p>
        </div>
    </div>
    @endif

    {{-- ══ CONTENT ══ --}}
    @yield('content')

    {{-- ══ FOOTER ══ --}}
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
                    <p class="text-sm leading-relaxed max-w-xs">Platform web sederhana yang dibangun sebagai proyek tugas kelompok mata kuliah Pemrograman Web 1.</p>
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
                        <li>PHP & Laravel</li>
                        <li>HTML & CSS</li>
                        <li>Tailwind CSS</li>
                        <li>MySQL</li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs">
                <p>&copy; {{ date('Y') }} NabilaShifa. All rights reserved.</p>
                <p>Dibuat dengan <span class="text-blue-400">♥</span> untuk Tugas Pemrograman Web 1</p>
            </div>
        </div>
    </footer>

</body>
</html>