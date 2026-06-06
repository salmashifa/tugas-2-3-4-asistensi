<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama | Nabila Shifa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-white text-slate-800 font-sans antialiased h-screen flex flex-col justify-between">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-slate-100 shadow-sm sticky top-0 z-50 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="/" class="flex items-center gap-2 text-blue-800 font-extrabold text-lg no-underline" style="text-decoration:none;">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-800 to-blue-400 flex items-center justify-center">
                        <svg class="w-5 h-5 fill-white" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>
                    NabilaShifa
                </a>
                <div class="flex items-center space-x-6">
                    <a href="/" class="text-blue-700 font-semibold border-b-2 border-blue-500 pb-0.5 text-sm transition" style="text-decoration:none;">Home</a>
                    <a href="/about" class="text-slate-600 hover:text-blue-700 font-medium text-sm transition" style="text-decoration:none;">About</a>
                    <a href="/contact" class="text-slate-600 hover:text-blue-700 font-medium text-sm transition" style="text-decoration:none;">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="flex flex-col items-center text-center w-full my-auto px-4">
        <span class="bg-blue-50 text-blue-700 text-sm font-semibold px-3 py-1 rounded-full mb-6">Project Tugas Kelompok</span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight max-w-4xl leading-tight">
            Ruang<br class="hidden sm:inline"> <span class="text-blue-600">NabilaShifa</span>
        </h1>
        <p class="mt-6 text-lg text-slate-500 max-w-2xl leading-relaxed">
            Selamat datang di platform kami. Website ini dirancang untuk memenuhi salah satu tugas 3 Asistensi Mata Kuliah Pemrograman Web 1.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="/about" class="bg-blue-600 hover:bg-blue-700 active:scale-95 transform duration-100 text-white px-8 py-3 rounded-xl font-semibold transition shadow-lg shadow-blue-200 text-center" style="text-decoration:none;">
                Jelajahi Fitur
            </a>
            <a href="/contact" class="bg-white hover:bg-slate-50 active:scale-95 transform duration-100 text-slate-700 border border-slate-200 px-8 py-3 rounded-xl font-semibold transition text-center shadow-sm" style="text-decoration:none;">
                Hubungi Kami
            </a>
        </div>
    </header>

    <!-- FOOTER -->
    <footer class="py-4 text-center w-full">
        <p class="text-xs text-slate-300">&copy; {{ date('Y') }} NabilaShifa.</p>
    </footer>

</body>
</html>