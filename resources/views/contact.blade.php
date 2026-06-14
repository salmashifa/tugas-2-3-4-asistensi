<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | Nabila Shifa</title>
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

        /* Form focus styles */
        .form-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.12);
        }
        .form-input {
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        /* Success state animation */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-up {
            animation: fadeInUp 0.4s ease forwards;
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
                    <a href="/about" class="nav-link text-slate-500 hover:text-slate-800 font-medium text-sm transition-colors" style="text-decoration:none;">About</a>
                    <a href="/contact" class="nav-link active text-blue-700 font-semibold text-sm" style="text-decoration:none;">Contact</a>
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
    <header class="hero-bg pt-20 pb-16 px-4">
        <div class="max-w-3xl mx-auto text-center">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full mb-8">
                <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse inline-block"></span>
                Hubungi Tim Kami
            </div>

            <!-- Heading -->
            <h1 class="text-5xl sm:text-6xl font-extrabold text-slate-900 tracking-tighter leading-[1.1] mb-6">
                Ada Pertanyaan?<br>
                <span class="gradient-text">Kami Siap Membantu</span>
            </h1>

            <!-- Subheading -->
            <p class="text-lg text-slate-500 max-w-xl mx-auto leading-relaxed">
                Isi formulir di bawah ini dan tim NabilaShifa akan segera menghubungi kamu kembali.
            </p>
        </div>
    </header>


    <!-- ═══════════════════════ CONTACT SECTION ═══════════════════════ -->
    <section class="py-16 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-start">

                <!-- ── Info Cards (left column) ── -->
                <div class="lg:col-span-2 flex flex-col gap-5">

                    <!-- Card: Email -->
                    <div class="card-hover bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-800 mb-1">Email</p>
                            <p class="text-sm text-slate-500 leading-relaxed">nabilashifa@gmail.com</p>
                        </div>
                    </div>

                    <!-- Card: WhatsApp -->
                    <div class="card-hover bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-800 mb-1">WhatsApp</p>
                            <p class="text-sm text-slate-500 leading-relaxed">+62 831-3012-2649</p>
                        </div>
                    </div>

                    <!-- Card: Lokasi -->
                    <div class="card-hover bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-800 mb-1">Kampus</p>
                            <p class="text-sm text-slate-500 leading-relaxed">Universitas Al-Ghifari Fakultas Teknologi Informasi</p>
                            <p class="text-xs text-blue-600 font-medium mt-1">Bandung, Jawa Barat</p>
                        </div>
                    </div>

                    <!-- Dark card: Info proyek -->
                    <div class="rounded-2xl overflow-hidden bg-gradient-to-br from-slate-900 to-blue-950 p-6">
                        <p class="text-blue-400 font-semibold text-xs uppercase tracking-widest mb-3">Tentang Proyek</p>
                        <p class="text-white font-bold text-sm mb-2">Pemrograman Web 1</p>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Website ini merupakan tugas kelompok asistensi mata kuliah Pemrograman Web 1 — dibangun dengan PHP, HTML, CSS, dan Tailwind CSS.
                        </p>
                        <div class="mt-4 flex items-center gap-2">
                            <span class="w-2 h-2 bg-blue-400 rounded-full animate-pulse inline-block"></span>
                            <span class="text-blue-300 text-xs font-medium">Tim NabilaShifa</span>
                        </div>
                    </div>

                </div>

                <!-- ── Contact Form (right column) ── -->
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8 sm:p-10">

                        <div class="mb-8">
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight mb-2">Kirim Pesan</h2>
                            <p class="text-sm text-slate-500">Isi semua kolom di bawah ini, lalu klik Kirim Pesan.</p>
                        </div>

                        <form id="contactForm" method="POST" action="/contact" class="space-y-5">

                            <!-- Nama & Email row -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="nama" class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">Nama Lengkap</label>
                                    <input
                                        id="nama"
                                        name="nama"
                                        type="text"
                                        placeholder="Contoh: Haikal"
                                        class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder-slate-400"
                                        required
                                    />
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">Alamat Email</label>
                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        placeholder="kamu@email.com"
                                        class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder-slate-400"
                                        required
                                    />
                                </div>
                            </div>

                            <!-- Subjek -->
                            <div>
                                <label for="subjek" class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">Subjek</label>
                                <input
                                    id="subjek"
                                    name="subjek"
                                    type="text"
                                    placeholder="Topik yang ingin kamu tanyakan"
                                    class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder-slate-400"
                                    required
                                />
                            </div>

                            <!-- Kategori -->
                            <div>
                                <label for="kategori" class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">Kategori Pesan</label>
                                <select
                                    id="kategori"
                                    name="kategori"
                                    class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 appearance-none"
                                >
                                    <option value="">Pilih kategori...</option>
                                    <option value="pertanyaan">Pertanyaan Umum</option>
                                    <option value="kolaborasi">Kolaborasi</option>
                                    <option value="feedback">Feedback / Saran</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>

                            <!-- Pesan -->
                            <div>
                                <label for="pesan" class="block text-xs font-semibold text-slate-700 mb-1.5 uppercase tracking-wide">Pesan</label>
                                <textarea
                                    id="pesan"
                                    name="pesan"
                                    rows="5"
                                    placeholder="Tuliskan pesan kamu di sini..."
                                    class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder-slate-400 resize-none"
                                    required
                                ></textarea>
                                <p class="text-xs text-slate-400 mt-1.5">Minimal 20 karakter.</p>
                            </div>

                            <!-- Submit Button -->
                            <button
                                type="submit"
                                class="w-full inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-semibold px-8 py-3.5 rounded-xl shadow-md shadow-blue-200 transition-all text-sm"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                Kirim Pesan
                            </button>

                        </form>

                        <!-- Success Notice (hidden by default, shown via PHP or JS) -->
                        <?php if (!empty($_GET['success'])): ?>
                        <div class="fade-in-up mt-6 flex items-start gap-3 bg-green-50 border border-green-200 rounded-xl px-5 py-4">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <div>
                                <p class="text-sm font-semibold text-green-800">Pesan berhasil dikirim!</p>
                                <p class="text-sm text-green-700 mt-0.5">Terima kasih. Tim kami akan menghubungi kamu segera.</p>
                            </div>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ═══════════════════════ CTA STRIP ═══════════════════════ -->
    <section class="py-16 px-4 bg-white border-t border-slate-100">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-4">Ingin Tahu Lebih Lanjut?</h2>
            <p class="text-slate-500 text-sm mb-8">Kunjungi halaman About untuk mengenal tim dan proyek kami lebih dekat.</p>
            <a href="/about" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-semibold px-8 py-3.5 rounded-xl shadow-md shadow-blue-200 transition-all" style="text-decoration:none;">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                Lihat Profil Tim
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