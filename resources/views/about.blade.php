<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | NabilaShifa</title>
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
        .card-hover {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(59, 130, 246, 0.15);
        }
        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px; left: 0;
            width: 0; height: 2px;
            background: #3b82f6;
            transition: width 0.25s ease;
        }
        .nav-link:hover::after { width: 100%; }
        .nav-link.active::after { width: 100%; }
        .member-card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .member-card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 48px -12px rgba(59, 130, 246, 0.2);
        }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

    <!-- ═══════════════════════ NAVBAR ═══════════════════════ -->
    <nav class="bg-white/90 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 w-full">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">

                <!-- Logo -->
                <a href="/" class="flex items-center gap-2.5 no-underline" style="text-decoration:none;">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-700 to-blue-400 flex items-center justify-center shadow-md shadow-blue-200">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                            <polyline points="2 17 12 22 22 17"/>
                            <polyline points="2 12 12 17 22 12"/>
                        </svg>
                    </div>
                    <span class="font-extrabold text-slate-800 text-base tracking-tight">Nabila<span class="text-blue-600">Shifa</span></span>
                </a>

                <!-- Nav Links -->
                <div class="hidden sm:flex items-center gap-8">
                    <a href="/" class="nav-link text-slate-500 hover:text-slate-800 font-medium text-sm transition-colors" style="text-decoration:none;">Home</a>
                    <a href="/about" class="nav-link active text-blue-700 font-semibold text-sm" style="text-decoration:none;">About</a>
                    <a href="/contact" class="nav-link text-slate-500 hover:text-slate-800 font-medium text-sm transition-colors" style="text-decoration:none;">Contact</a>
                </div>

                <!-- CTA Button -->
                <a href="/contact" class="hidden sm:inline-flex items-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-lg transition-colors shadow-sm shadow-blue-200" style="text-decoration:none;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    Hubungi Kami
                </a>

                <!-- Mobile Hamburger -->
                <button class="sm:hidden p-2 rounded-lg text-slate-500 hover:bg-slate-100 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>


    <!-- ═══════════════════════ HERO ═══════════════════════ -->
    <header style="background: radial-gradient(ellipse 80% 60% at 50% -10%, #dbeafe 0%, transparent 70%);" class="pt-20 pb-24 px-4">
        <div class="max-w-4xl mx-auto text-center">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full mb-8">
                <span class="w-2 h-2 bg-blue-500 rounded-full inline-block"></span>
                Kelompok Asistensi — Sistem Informasi Al-Ghifari
            </div>

            <!-- Heading -->
            <h1 class="text-5xl sm:text-6xl font-extrabold text-slate-900 tracking-tighter leading-[1.1] mb-6">
                Tentang<br>
                <span class="gradient-text">Tim Kami</span>
            </h1>

            <!-- Subheading -->
            <p class="text-lg text-slate-500 max-w-xl mx-auto leading-relaxed mb-10">
                Kami adalah mahasiswi Program Studi Sistem Informasi Universitas Al-Ghifari yang mengerjakan proyek ini sebagai bagian dari Asistensi Mata Kuliah Pemrograman Web 1.
            </p>

            <!-- Stats Row -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-8 sm:gap-16 text-center">
                <div>
                    <p class="text-3xl font-extrabold text-slate-800">2</p>
                    <p class="text-sm text-slate-400 mt-0.5">Anggota Tim</p>
                </div>
                <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                <div>
                    <p class="text-3xl font-extrabold text-slate-800">Laravel</p>
                    <p class="text-sm text-slate-400 mt-0.5">Framework</p>
                </div>
                <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                <div>
                    <p class="text-3xl font-extrabold text-slate-800">SI</p>
                    <p class="text-sm text-slate-400 mt-0.5">Program Studi</p>
                </div>
            </div>
        </div>
    </header>


    <!-- ═══════════════════════ ABOUT PROJECT ═══════════════════════ -->
    <section class="py-20 px-4 bg-slate-50">
        <div class="max-w-6xl mx-auto">

            <!-- Section Header -->
            <div class="text-center mb-14">
                <p class="text-blue-600 font-semibold text-sm uppercase tracking-widest mb-3">Proyek Kami</p>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Tentang Halaman Ini</h2>
            </div>

            <!-- About Card (Dark Panel, sama dengan home) -->
            <div class="bg-gradient-to-br from-slate-900 to-blue-950 rounded-3xl overflow-hidden mb-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">

                    <!-- Text Side -->
                    <div class="p-10 sm:p-14 flex flex-col justify-center">
                        <p class="text-blue-400 font-semibold text-xs uppercase tracking-widest mb-4">Latar Belakang</p>
                        <h3 class="text-3xl font-extrabold text-white tracking-tight leading-snug mb-5">
                            Lebih dari Sekadar<br>Tugas Kuliah
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Halaman ini merupakan bagian dari proyek Asistensi mata kuliah Pemrograman Web 1, Program Studi Sistem Informasi. Proyek ini dibangun menggunakan framework <strong class="text-white">Laravel</strong> dengan tampilan yang modern, bersih, dan responsif.
                        </p>
                    </div>

                    <!-- Info Side -->
                    <div class="bg-white/5 border-l border-white/10 p-10 sm:p-14 flex flex-col justify-center gap-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Mata Kuliah</p>
                                <p class="text-slate-400 text-sm mt-0.5">Pemrograman Web 1 — Asistensi Tugas 3</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Program Studi</p>
                                <p class="text-slate-400 text-sm mt-0.5">Sistem Informasi — Universitas Al-Ghifari</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Teknologi</p>
                                <p class="text-slate-400 text-sm mt-0.5">PHP, Laravel, Tailwind CSS, MySQL</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards (sama style dengan home) -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="card-hover bg-white rounded-2xl p-7 border border-slate-100 shadow-sm text-center">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <p class="text-3xl font-extrabold text-blue-600 mb-1">2</p>
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


    <!-- ═══════════════════════ TEAM ═══════════════════════ -->
    <section class="py-20 px-4 bg-white">
        <div class="max-w-6xl mx-auto">

            <!-- Section Header -->
            <div class="text-center mb-14">
                <p class="text-blue-600 font-semibold text-sm uppercase tracking-widest mb-3">Tim Kelompok</p>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Anggota Kami</h2>
                <p class="mt-4 text-slate-500 max-w-lg mx-auto text-base">Dua mahasiswi yang berkolaborasi membangun proyek ini dengan penuh semangat.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-2xl mx-auto">

                <!-- Anggota 1 -->
                <div class="member-card-hover bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-br from-blue-700 to-blue-500 p-8 text-center">
                        <img src="{{ asset('image/alya.jpg') }}"
                             class="w-24 h-24 rounded-full object-cover object-top border-4 border-white/40 mx-auto"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                        <div style="display:none;" class="w-24 h-24 rounded-full bg-white/20 mx-auto items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                    </div>
                    <div class="p-7 text-center">
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Alya Nabila</h3>
                        <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full mb-4">NIM: F1B250014</span>
                        <p class="text-sm text-slate-500 mb-5 leading-relaxed">Mahasiswi Program Studi Sistem Informasi<br>Universitas Al-Ghifari</p>
                        <div class="w-8 h-0.5 bg-blue-100 rounded mx-auto mb-5"></div>
                        <a href="https://github.com/nbilaalya2406-eng" target="_blank"
                           class="inline-flex items-center gap-2 bg-slate-800 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2 rounded-full transition-colors"
                           style="text-decoration:none;">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.021c0 4.428 2.865 8.184 6.839 9.504.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.342-3.369-1.342-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.026 2.747-1.026.546 1.378.202 2.397.1 2.65.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.944.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.579.688.481C19.138 20.2 22 16.447 22 12.021 22 6.484 17.522 2 12 2z"/></svg>
                            GitHub
                        </a>
                    </div>
                </div>

                <!-- Anggota 2 -->
                <div class="member-card-hover bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-br from-blue-700 to-blue-500 p-8 text-center">
                        <img src="{{ asset('image/shifa.jpg') }}"
                             class="w-24 h-24 rounded-full object-cover object-top border-4 border-white/40 mx-auto"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                        <div style="display:none;" class="w-24 h-24 rounded-full bg-white/20 mx-auto items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                    </div>
                    <div class="p-7 text-center">
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Shifa Salma</h3>
                        <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full mb-4">NIM: F1B250010</span>
                        <p class="text-sm text-slate-500 mb-5 leading-relaxed">Mahasiswi Program Studi Sistem Informasi<br>Universitas Al-Ghifari</p>
                        <div class="w-8 h-0.5 bg-blue-100 rounded mx-auto mb-5"></div>
                        <a href="https://github.com/salmashifa" target="_blank"
                           class="inline-flex items-center gap-2 bg-slate-800 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2 rounded-full transition-colors"
                           style="text-decoration:none;">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.021c0 4.428 2.865 8.184 6.839 9.504.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.342-3.369-1.342-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.026 2.747-1.026.546 1.378.202 2.397.1 2.65.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.944.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.579.688.481C19.138 20.2 22 16.447 22 12.021 22 6.484 17.522 2 12 2z"/></svg>
                            GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════ CTA STRIP ═══════════════════════ -->
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


    <!-- ═══════════════════════ FOOTER ═══════════════════════ -->
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