<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Sistem Informasi Al-Ghifari</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Lora:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --blue-deep:   #1a4fa0;
            --blue-mid:    #2d6cca;
            --blue-light:  #5b9df5;
            --blue-pale:   #ddeeff;
            --white:       #ffffff;
            --off-white:   #f4f7fc;
            --neutral-100: #e8edf5;
            --neutral-300: #b0bdd4;
            --neutral-600: #4a5878;
            --neutral-800: #1e2a40;
            --shadow-sm:   0 2px 8px rgba(26,79,160,.08);
            --shadow-md:   0 8px 32px rgba(26,79,160,.13);
            --shadow-lg:   0 20px 60px rgba(26,79,160,.18);
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--off-white);
            color: var(--neutral-800);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Nav */
        nav {
            background: var(--white);
            border-bottom: 1px solid var(--neutral-100);
            box-shadow: var(--shadow-sm);
            position: sticky; top: 0; z-index: 100;
        }
        .nav-inner {
            max-width: 1100px; margin: 0 auto;
            padding: 0 2rem;
            display: flex; align-items: center; justify-content: space-between;
            height: 64px;
        }
        .nav-logo {
            display: flex; align-items: center; gap: .7rem;
            font-weight: 800; font-size: 1.1rem; color: var(--blue-deep);
            text-decoration: none;
        }
        .nav-logo-icon {
            width: 36px; height: 36px; border-radius: 10px;
            background: linear-gradient(135deg, var(--blue-deep), var(--blue-light));
            display: grid; place-items: center;
        }
        .nav-logo-icon svg { width: 20px; height: 20px; fill: white; }
        .nav-links { display: flex; gap: 2rem; list-style: none; }
        .nav-links a {
            text-decoration: none; font-size: .9rem; font-weight: 500;
            color: var(--neutral-600); transition: color .2s;
        }
        .nav-links a:hover, .nav-links a.active { color: var(--blue-deep); }
        .nav-links a.active { border-bottom: 2px solid var(--blue-mid); padding-bottom: 2px; }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, var(--blue-deep) 0%, var(--blue-mid) 60%, var(--blue-light) 100%);
            padding: 5rem 2rem 4rem;
            text-align: center;
            position: relative; overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute; inset: 0;
            background: radial-gradient(ellipse 70% 60% at 50% 0%, rgba(255,255,255,.12) 0%, transparent 70%);
        }
        .hero-badge {
            display: inline-block;
            background: rgba(255,255,255,.18);
            border: 1px solid rgba(255,255,255,.35);
            border-radius: 99px;
            padding: .35rem 1.1rem;
            font-size: .78rem; font-weight: 600; letter-spacing: .06em;
            color: #fff; text-transform: uppercase; margin-bottom: 1.4rem;
        }
        .hero h1 {
            font-family: 'Lora', serif;
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 600; color: #fff;
            line-height: 1.2; margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.05rem; color: rgba(255,255,255,.82);
            max-width: 540px; margin: 0 auto 2.2rem;
            line-height: 1.7;
        }
        .hero-divider {
            width: 56px; height: 3px;
            background: rgba(255,255,255,.5);
            border-radius: 99px; margin: 0 auto;
        }

        /* Main */
        .main { max-width: 1100px; margin: 0 auto; padding: 3.5rem 2rem 5rem; }

        .section-title {
            text-align: center; margin-bottom: 2.5rem;
        }
        .section-title span {
            display: inline-block;
            background: var(--blue-pale);
            color: var(--blue-deep);
            font-size: .78rem; font-weight: 700; letter-spacing: .08em;
            text-transform: uppercase; border-radius: 99px;
            padding: .3rem 1rem; margin-bottom: .8rem;
        }
        .section-title h2 {
            font-family: 'Lora', serif;
            font-size: clamp(1.5rem, 3vw, 2rem);
            font-weight: 600; color: var(--blue-deep);
        }

        /* About Card */
        .about-card {
            background: var(--white);
            border: 1px solid var(--neutral-100);
            border-radius: 20px;
            padding: 2.5rem 3rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 3rem;
        }
        .about-card p {
            font-size: 1rem; line-height: 1.85;
            color: var(--neutral-600); margin-bottom: 1.1rem;
        }
        .about-card p:last-child { margin-bottom: 0; }

        /* Stats */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 1.2rem; margin-bottom: 3rem;
        }
        .stat-box {
            background: var(--white);
            border: 1px solid var(--neutral-100);
            border-radius: 16px;
            padding: 1.6rem 1.2rem;
            text-align: center;
            box-shadow: var(--shadow-sm);
            transition: transform .25s, box-shadow .25s;
        }
        .stat-box:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
        }
        .stat-icon {
            width: 48px; height: 48px; border-radius: 14px;
            background: var(--blue-pale);
            display: grid; place-items: center; margin: 0 auto .9rem;
        }
        .stat-icon svg { width: 24px; height: 24px; stroke: var(--blue-deep); fill: none; stroke-width: 1.8; }
        .stat-value {
            font-size: 1.6rem; font-weight: 800;
            color: var(--blue-deep); line-height: 1;
        }
        .stat-label {
            font-size: .8rem; font-weight: 500;
            color: var(--neutral-300); margin-top: .35rem;
            text-transform: uppercase; letter-spacing: .05em;
        }

        /* Anggota */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem; margin-bottom: 3rem;
        }
        .member-card {
            background: var(--white);
            border: 1px solid var(--neutral-100);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: transform .3s, box-shadow .3s;
        }
        .member-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-lg);
        }
        .member-header {
            background: linear-gradient(135deg, var(--blue-deep), var(--blue-mid));
            padding: 2rem; text-align: center;
            position: relative;
        }
        .member-avatar {
            width: 80px; height: 80px; border-radius: 50%;
            background: rgba(255,255,255,.2);
            border: 3px solid rgba(255,255,255,.5);
            display: grid; place-items: center; margin: 0 auto;
            font-size: 2rem; font-weight: 800;
            color: white; font-family: 'Lora', serif;
        }
        .member-body { padding: 1.6rem; text-align: center; }
        .member-name {
            font-size: 1.1rem; font-weight: 700;
            color: var(--neutral-800); margin-bottom: .3rem;
        }
        .member-nim {
            display: inline-block;
            background: var(--blue-pale);
            color: var(--blue-deep);
            font-size: .78rem; font-weight: 600;
            border-radius: 99px; padding: .25rem .9rem;
            margin-bottom: .9rem;
        }
        .member-role {
            font-size: .88rem; color: var(--neutral-600);
            line-height: 1.5;
        }
        .member-divider {
            width: 32px; height: 2px; background: var(--blue-pale);
            border-radius: 99px; margin: .9rem auto;
        }
        .member-github {
            display: inline-flex;
            align-items: center;
            gap: .45rem;
            margin-top: .5rem;
            background: var(--neutral-800);
            color: white;
            font-size: .8rem;
            font-weight: 600;
            text-decoration: none;
            padding: .35rem .9rem;
            border-radius: 99px;
            transition: background .2s, transform .2s;
        }
        .member-github:hover {
            background: var(--blue-deep);
            transform: translateY(-2px);
        }
        .member-github svg {
            width: 16px;
            height: 16px;
        }

        /* info box */
        .info-box {
            background: linear-gradient(135deg, var(--blue-pale) 0%, #eef4ff 100%);
            border: 1px solid #c5dbff;
            border-radius: 20px;
            padding: 2.2rem 2.5rem;
            display: flex; align-items: flex-start; gap: 1.4rem;
        }
        .info-box-icon {
            flex-shrink: 0;
            width: 52px; height: 52px; border-radius: 14px;
            background: var(--blue-deep);
            display: grid; place-items: center;
        }
        .info-box-icon svg { width: 26px; height: 26px; stroke: white; fill: none; stroke-width: 1.8; }
        .info-box-content h3 {
            font-size: 1.1rem; font-weight: 700;
            color: var(--blue-deep); margin-bottom: .5rem;
        }
        .info-box-content p {
            font-size: .95rem; color: var(--neutral-600); line-height: 1.7;
        }

        .member-avatar {
            object-fit: cover;      
            object-position: center top; 
        }

        /* FOOTER */
        footer {
            background: var(--white);
            border-top: 1px solid var(--neutral-100);
            text-align: center;
            padding: 1.8rem;
            font-size: .85rem; color: var(--neutral-300);
        }
        footer strong { color: var(--blue-deep); }

        /* Animasi */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .hero > * { animation: fadeUp .6s ease both; }
        .hero-badge { animation-delay: .05s; }
        .hero h1   { animation-delay: .15s; }
        .hero p    { animation-delay: .25s; }
        .hero-divider { animation-delay: .35s; }

        .about-card, .stats, .team-grid, .info-box {
            animation: fadeUp .7s ease both;
            animation-delay: .1s;
        }

        @media (max-width: 600px) {
            .about-card { padding: 1.6rem 1.4rem; }
            .info-box { flex-direction: column; }
            .nav-links { display: none; }
        }
    </style>
</head>
<body>

    <!-- Nav -->
    <nav>
        <div class="nav-inner">
            <a href="/" class="nav-logo">
                <div class="nav-logo-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </div>
                NabilaShifa
            </a>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/about" class="active">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">   
        <p class="hero-badge">Tentang Kami</p>
        <h1>Kelompok Asistensi</h1>
        <p>Mahasiswi Program Studi Sistem Informasi.</p>
        <div class="hero-divider"></div>
    </section>

    <!-- Main -->
    <main class="main">

        {{-- Tentang Proyek --}}
        <div class="section-title">
            <span>Proyek Kami</span>
            <h2>Tentang Halaman Ini</h2>
        </div>

        <div class="about-card">
            <p>
                Halaman ini merupakan bagian dari proyek Asistensi mata kuliah Pemrograman Web 1,
                Sistem Informasi. Proyek ini dibangun menggunakan framework <strong>Laravel</strong>
                dengan tampilan yang simple.
            </p>
        </div>

        <div class="stats">
            <div class="stat-box">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div class="stat-value">2</div>
                <div class="stat-label">Anggota Tim</div>
            </div>
            <!-- <div class="stat-box">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8m-4-4v4"/></svg>
                </div>
                <div class="stat-value">1</div>
                <div class="stat-label">Proyek Aktif</div>
            </div> -->
            <div class="stat-box">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                </div>
                <div class="stat-value">Sistem Informasi</div>
                <div class="stat-label">Program Studi</div>
            </div>
            <div class="stat-box">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                </div>
                <div class="stat-value">Laravel</div>
                <div class="stat-label">Framework</div>
            </div>
        </div>

        <!-- Anggota -->
        <div class="section-title">
            <span>Tim Kelompok</span>
            <h2>Anggota Kami</h2>
        </div>

        <div class="team-grid">
            <!-- Anggota 1 -->
            <div class="member-card">
                <div class="member-header">
                    <img src="{{ asset('image/alya.jpg') }}" class="member-avatar">
                </div>
                <div class="member-body">
                    <div class="member-name">Alya Nabila</div>
                    <div class="member-nim">NIM: F1B250014</div>
                    <a href="https://github.com/nbilaalya2406-eng" target="_blank" class="member-github">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.021c0 4.428 2.865 8.184 6.839 9.504.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.342-3.369-1.342-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.026 2.747-1.026.546 1.378.202 2.397.1 2.65.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.944.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.579.688.481C19.138 20.2 22 16.447 22 12.021 22 6.484 17.522 2 12 2z"/></svg>
                        GitHub
                    </a>
                    <div class="member-divider"></div>
                    <div class="member-role">Mahasiswi Program Studi Sistem Informasi<br>Universitas Al-Ghifari</div>
                </div>
            </div>

            <!-- Anggota 2 -->
            <div class="member-card">
                <div class="member-header">
                    <img src="{{ asset('image/shifa.jpg') }}" class="member-avatar">
                </div>
                <div class="member-body">
                    <div class="member-name">Shifa Salma</div>
                    <div class="member-nim">NIM: F1B250010</div>
                    <a href="https://github.com/salmashifa" target="_blank" class="member-github">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.021c0 4.428 2.865 8.184 6.839 9.504.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.342-3.369-1.342-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.026 2.747-1.026.546 1.378.202 2.397.1 2.65.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.944.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.579.688.481C19.138 20.2 22 16.447 22 12.021 22 6.484 17.522 2 12 2z"/></svg>
                        GitHub
                    </a>
                    <div class="member-divider"></div>
                    <div class="member-role">Mahasiswi Program Studi Sistem Informasi<br>Universitas Al-Ghifari</div>
                </div>
            </div>
        </div>

        <!-- info box -->
        <div class="info-box">
            <div class="info-box-icon">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </div>
            <div class="info-box-content">
                <h3>Program Studi Sistem Informasi</h3>
                <p>Proyek ini dikerjakan sebagai bagian dari tugas 3 Asistensi mata kuliah Pemrograman Web 1.</p>
            </div>
        </div>

    </main>

    <!-- FOOTER  -->
    <footer>
        &copy; {{ date('Y') }}  · NabilaShifa · 
    </footer>

</body>
</html>