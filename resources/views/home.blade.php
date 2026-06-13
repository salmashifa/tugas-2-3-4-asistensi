<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama | Nabila Shifa</title>
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
        .card-hover {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(59, 130, 246, 0.15);
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
                    <a href="/" class="nav-link active text-blue-700 font-semibold text-sm" style="text-decoration:none;">Home</a>
                    <a href="/about" class="nav-link text-slate-500 hover:text-slate-800 font-medium text-sm transition-colors" style="text-decoration:none;">About</a>
                    <a href="/contact" class="nav-link text-slate-500 hover:text-slate-800 font-medium text-sm transition-colors" style="text-decoration:none;">Contact</a>
                </div>

                <!-- CTA Button -->
                <a href="/contact" class="hidden sm:inline-flex items-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-lg transition-colors shadow-sm shadow-blue-200" style="text-decoration:none;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    Hubungi Kami
                </a>

                <!-- Mobile Hamburger -->
                <button class="sm:hidden p-2 rounded-lg text-slate-500 hover:bg-slate-100 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
            </div>
        </div>
    </nav>


    <!-- ═══════════════════════ HERO ═══════════════════════ -->
    <header class="hero-bg pt-20 pb-24 px-4">
        <div class="max-w-4xl mx-auto text-center">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full mb-8">
                <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse inline-block"></span>
                Project Tugas Kelompok — Pemrograman Web 1
            </div>

            <!-- Heading -->
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-slate-900 tracking-tighter leading-[1.1] mb-6">
                Ruang Kreasi<br>
                <span class="gradient-text">NabilaShifa</span>
            </h1>

            <!-- Subheading -->
            <p class="text-lg text-slate-500 max-w-xl mx-auto leading-relaxed mb-10">
                Platform web yang kami bangun sebagai bagian dari Asistensi Mata Kuliah Pemrograman Web 1 — sederhana, bersih, dan fungsional.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/about" class="inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-semibold px-8 py-3.5 rounded-xl shadow-lg shadow-blue-200 transition-all" style="text-decoration:none;">
                    Jelajahi Fitur
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="/contact" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 active:scale-95 text-slate-700 font-semibold px-8 py-3.5 rounded-xl border border-slate-200 shadow-sm transition-all" style="text-decoration:none;">
                    Hubungi Kami
                </a>
            </div>

            <!-- Stats Row -->
            <div class="mt-16 flex flex-col sm:flex-row justify-center items-center gap-8 sm:gap-16 text-center">
                <div>
                    <p class="text-3xl font-extrabold text-slate-800">3+</p>
                    <p class="text-sm text-slate-400 mt-0.5">Halaman Website</p>
                </div>
                <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                <div>
                    <p class="text-3xl font-extrabold text-slate-800">100%</p>
                    <p class="text-sm text-slate-400 mt-0.5">Responsif</p>
                </div>
                <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                <div>
                    <p class="text-3xl font-extrabold text-slate-800">PHP</p>
                    <p class="text-sm text-slate-400 mt-0.5">Ditenagai Bahasa</p>
                </div>
            </div>
        </div>
    </header>


    <!-- ═══════════════════════ FEATURES ═══════════════════════ -->
    <section class="py-24 px-4 bg-slate-50">
        <div class="max-w-6xl mx-auto">

            <!-- Section Header -->
            <div class="text-center mb-14">
                <p class="text-blue-600 font-semibold text-sm uppercase tracking-widest mb-3">Apa yang Kami Tawarkan</p>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Fitur Unggulan Platform</h2>
                <p class="mt-4 text-slate-500 max-w-lg mx-auto text-base">Dirancang dengan pendekatan sederhana namun efektif untuk kebutuhan tugas akademis.</p>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="card-hover bg-white rounded-2xl p-7 border border-slate-100 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-800 mb-2">Desain Responsif</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Tampilan menyesuaikan layar perangkat apapun — mobile, tablet, maupun desktop.</p>
                </div>

                <!-- Card 2 -->
                <div class="card-hover bg-white rounded-2xl p-7 border border-slate-100 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-800 mb-2">Konten Terstruktur</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Setiap halaman disusun dengan hierarki konten yang jelas dan mudah dinavigasi.</p>
                </div>

                <!-- Card 3 -->
                <div class="card-hover bg-white rounded-2xl p-7 border border-slate-100 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-800 mb-2">Form Kontak</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Tersedia halaman kontak untuk menghubungi tim kami secara langsung dan mudah.</p>
                </div>

                <!-- Card 4 -->
                <div class="card-hover bg-white rounded-2xl p-7 border border-slate-100 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-800 mb-2">Akses Cepat</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Navigasi intuitif membantu pengguna menemukan informasi tanpa hambatan.</p>
                </div>

                <!-- Card 5 -->
                <div class="card-hover bg-white rounded-2xl p-7 border border-slate-100 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-800 mb-2">Profil Tim</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Halaman About memperkenalkan anggota tim dengan informasi yang lengkap.</p>
                </div>

                <!-- Card 6 -->
                <div class="card-hover bg-gradient-to-br from-blue-600 to-blue-500 rounded-2xl p-7 shadow-lg shadow-blue-200">
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-white mb-2">Dibuat dengan Semangat</h3>
                    <p class="text-sm text-blue-100 leading-relaxed">Proyek ini dikerjakan dengan dedikasi penuh sebagai bagian dari pembelajaran akademik.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ═══════════════════════ ABOUT PREVIEW ═══════════════════════ -->
    <section class="py-24 px-4 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="bg-gradient-to-br from-slate-900 to-blue-950 rounded-3xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">

                    <!-- Text Side -->
                    <div class="p-10 sm:p-14 flex flex-col justify-center">
                        <p class="text-blue-400 font-semibold text-xs uppercase tracking-widest mb-4">Tentang Proyek</p>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-snug mb-5">
                            Lebih dari Sekadar<br>Tugas Kuliah
                        </h2>
                        <p class="text-slate-400 text-sm leading-relaxed mb-8">
                            Website NabilaShifa merupakan hasil kerja keras tim dalam memahami konsep dasar pemrograman web — mulai dari struktur HTML, styling dengan CSS, hingga logika server-side dengan PHP.
                        </p>
                        <a href="/about" class="self-start inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-500 text-white text-sm font-semibold px-6 py-3 rounded-xl transition-colors" style="text-decoration:none;">
                            Lihat Profil Tim
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
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
                                <p class="text-white font-semibold text-sm">Tim Pengembang</p>
                                <p class="text-slate-400 text-sm mt-0.5">Kelompok NabilaShifa</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Teknologi</p>
                                <p class="text-slate-400 text-sm mt-0.5">PHP, HTML, CSS, Tailwind CSS</p>
                            </div>
                        </div>

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

            <!-- Footer Top -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-800">

                <!-- Brand -->
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

                <!-- Navigasi -->
                <div>
                    <p class="text-white font-semibold text-sm mb-4">Navigasi</p>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/" class="hover:text-white transition-colors" style="text-decoration:none;">Home</a></li>
                        <li><a href="/about" class="hover:text-white transition-colors" style="text-decoration:none;">About</a></li>
                        <li><a href="/contact" class="hover:text-white transition-colors" style="text-decoration:none;">Contact</a></li>
                    </ul>
                </div>

                <!-- Teknologi -->
                <div>
                    <p class="text-white font-semibold text-sm mb-4">Teknologi</p>
                    <ul class="space-y-3 text-sm">
                        <li><span>PHP</span></li>
                        <li><span>HTML & CSS</span></li>
                        <li><span>Tailwind CSS</span></li>
                    </ul>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs">
                <p>&copy; <?= date('Y') ?> NabilaShifa. All rights reserved.</p>
                <p>Dibuat dengan <span class="text-blue-400">♥</span> untuk Tugas Pemrograman Web 1</p>
            </div>

        </div>
    </footer>

</body>
</html>