<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama | Nabila Shifa</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
 <!-- Menggunakan h-screen agar halaman pas satu layar penuh tanpa scroll -->
<body class="bg-white text-slate-800 font-sans antialiased h-screen flex flex-col justify-between">

     <!-- NAVBAR (Bagian Atas) -->
    <nav class="bg-white w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <!-- NabilaShifa berwarna biru--> 
                    <span class="text-2xl font-bold text-blue-600 tracking-tight">NabilaShifa</span>
                </div>
                
                <!--menu Kanan Atas--> 
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-slate-700 hover:text-blue-600 font-medium transition">Home</a>
                    <a href="#" class="text-slate-700 hover:text-blue-600 font-medium transition">About</a>
                    <a href="#" class="text-slate-700 hover:text-blue-600 font-medium transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

   <!-- HERO SECTION-->
    <header class="flex flex-col items-center text-center w-full my-auto px-4">
         <!-- Badge Kecil -->
        <span class="bg-blue-50 text-blue-700 text-sm font-semibold px-3 py-1 rounded-full mb-6">Project Tugas Kelompok</span>
        
        <!--Judul Utama--> 
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight max-w-4xl leading-tight">
            Ruang<br class="hidden sm:inline"> <span class="text-blue-600">NabilaShifa</span>
        </h1>
        
        <!-- Deskripsi -->
        <p class="mt-6 text-lg text-slate-500 max-w-2xl leading-relaxed">
            Selamat datang di platform kami. Website ini dirancang untuk memenuhi salah satu tugas 3 Asistensi Mata Kuliah Pemrograman Web 1.
        </p>
        
        <!-- Tombol Aksi Sesuai Gambar -->
        <div class="mt-10 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
    <!-- Tombol 1 -->
    <a href="#" class="bg-blue-600 hover:bg-blue-700 active:scale-95 transform duration-100 text-white px-8 py-3 rounded-xl font-semibold transition shadow-lg shadow-blue-200 text-center">
        Jelajahi Fitur
    </a>
    
    <!-- Tombol 2 -->
    <a href="#" class="bg-white hover:bg-slate-50 active:scale-95 transform duration-100 text-slate-700 border border-slate-200 px-8 py-3 rounded-xl font-semibold transition text-center shadow-sm">
        Hubungi Kami
    </a>
</div>
    </header>

    <!-- FOOTER TIPIS (Penyeimbang agar layout presisi di tengah) -->
    <footer class="py-4 text-center w-full">
        <p class="text-xs text-slate-300">&copy; {{ date('Y') }} NabilaShifa.</p>
    </footer>

</body>
</html>