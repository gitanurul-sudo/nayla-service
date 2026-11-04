
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beranda | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite([
    'resources/css/customer-home.css',
    'resources/css/customer-layanan.css',
    'resources/css/customer-lokasi.css',
    'resources/css/customer-konsultasi.css',
    'resources/css/customer-status.css'
])
</head>

<body>
    <!-- NAVBAR -->
    <header class="site-header">
        <nav class="navbar" aria-label="Navigasi utama">

            <a href="{{ route('customer.home') }}" class="brand">
                <div class="brand-logo">N</div>
                <span>NAYLA <strong>SERVICE</strong></span>
            </a>

            <button
                type="button"
                class="menu-toggle"
                id="menuToggle"
                aria-label="Buka menu"
                aria-expanded="false"
                aria-controls="navLinks">
                ☰
            </button>

            
        <div class="nav-links" id="navLinks">
            <a href="#beranda" class="active">
                Beranda
            </a>

            <a href="#layanan">
                Layanan
            </a>

            <a href="#lokasi">
                Lokasi
            </a>

            <a href="#konsultasi">
                Konsultasi
            </a>

            <a href="#cek-status">
                Cek Status
            </a>
        </div>

        </nav>
    </header>

<div class="page-container">


        <!-- HERO SECTION -->
        <section class="hero" id="beranda">
    
            <div class="hero-content">

                <h2 class="hero-subtitle">
                    Service iPhone &amp; Android
                    <span>Bergaransi</span>
                </h2>

                <h1 class="hero-title">
                    NAYLA SERVICE
                </h1>

                <p class="hero-description">
                    Sejak 2006, kami sudah membantu banyak pelanggan
                    mengatasi berbagai masalah HP. Mulai dari kerusakan
                    ringan hingga perbaikan yang lebih kompleks,
                    kami siap bantu mencarikan solusi terbaik
                    untuk perangkatmu.
                </p>

                <a href="{{ route('customer.konsultasi') }}"
                   class="primary-button">
                    Konsultasi
                    <span aria-hidden="true">→</span>
                </a>

            </div>

            <!-- ILUSTRASI SMARTPHONE -->
            <div class="hero-visual" aria-label="Ilustrasi layanan perbaikan smartphone">

                <div class="orbit orbit-outer"></div>
                <div class="orbit orbit-middle"></div>
                <div class="orbit orbit-inner"></div>

                <div class="phone">
                    <div class="phone-screen">

                        <div class="phone-notch"></div>

                        <div class="phone-content">

                            <div class="repair-icon">
                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     aria-hidden="true">
                                    <path d="M22 7.5a6 6 0 0 1-7.5 7.5L7 22l-5-5 7-7.5A6 6 0 0 1 16.5 2L13 5.5l5.5 5.5L22 7.5Z"/>
                                </svg>
                            </div>

                            <h3>Device Care</h3>
                            <p>PROFESSIONAL REPAIR</p>

                        </div>

                    </div>
                </div>

                <!-- BADGE GARANSI -->
                <div class="floating-card warranty-card">
                    <div class="floating-icon">
                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M5 12l4 4L19 6"/>
                        </svg>
                    </div>

                    <div class="floating-text">
                        <strong>Garansi hingga 30 Hari</strong>
                        <span>Untuk setiap servis</span>
                    </div>
                </div>

                <!-- BADGE PENGALAMAN -->
                <div class="floating-card experience-card">
                    <div class="floating-icon">
                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             aria-hidden="true">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M12 7v5l3 2"/>
                        </svg>
                    </div>

                    <div class="floating-text">
                        <strong>20+ Tahun</strong>
                        <span>Melayani pelanggan</span>
                    </div>
                </div>

            </div>

        </section>

        <!-- STATISTIK -->
        <section class="statistics" aria-label="Statistik layanan Nayla Service">

            <div class="stat-item">
                <h3>10.000+</h3>
                <p>PERANGKAT DIPERBAIKI</p>
            </div>

            <div class="stat-item">
                <h3>4.9/5</h3>
                <p>RATING PELANGGAN</p>
            </div>

            <div class="stat-item">
                <h3>Hingga 30 Hari</h3>
                <p>GARANSI SERVIS</p>
            </div>

            <div class="stat-item">
                <h3>100%</h3>
                <p>ESTIMASI TRANSPARAN</p>
            </div>

        </section>

        <!-- TENTANG KAMI -->
        <section class="about-section" id="tentang">

            <div class="about-left">

                <p class="small-label">TENTANG KAMI</p>

                <h2>
                    Bukan sekadar memperbaiki.
                    Kami menjaga kepercayaan.
                </h2>

            </div>

            <div class="about-right">

                <p>
                    Setiap perangkat ditangani teknisi berpengalaman
                    dengan suku cadang berkualitas. Kamu akan selalu
                    mendapat informasi sebelum tindakan perbaikan
                    dilakukan.
                </p>

            </div>

        </section>
        
        <!-- ===================================
            FITUR CUSTOMER DI HALAMAN BERANDA
        =================================== -->

        <!-- LAYANAN -->
        <div id="layanan" class="home-feature-anchor">
            @include('customer.sections.layanan')
        </div>

        <!-- LOKASI -->
        <div id="lokasi" class="home-feature-anchor">
            @include('customer.sections.lokasi')
        </div>

        <!-- KONSULTASI -->
        <div id="konsultasi" class="home-feature-anchor">
            @include('customer.sections.konsultasi')
        </div>

        <!-- CEK STATUS -->
        <div id="cek-status" class="home-feature-anchor">
            @include('customer.sections.status')
        </div>


    </main>

</div>

<script>
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', function () {
        const isOpen = navLinks.classList.toggle('show');

        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.setAttribute(
            'aria-label',
            isOpen ? 'Tutup menu' : 'Buka menu'
        );
    });

    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', function () {
            navLinks.classList.remove('show');
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const navLinks = document.querySelectorAll(
        '.nav-links a[href^="#"]'
    );

    const sectionIds = [
        'beranda',
        'layanan',
        'lokasi',
        'konsultasi',
        'cek-status'
    ];

    const sections = sectionIds
        .map(id => document.getElementById(id))
        .filter(Boolean);

    function setActiveMenu(id) {
        navLinks.forEach(link => {
            const isActive =
                link.getAttribute('href') === '#' + id;

            link.classList.toggle('active', isActive);

            if (isActive) {
                link.setAttribute('aria-current', 'location');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    }

    function updateActiveMenu() {
        const scrollPosition = window.scrollY + 130;
        let activeId = 'beranda';

        sections.forEach(section => {
            const sectionTop =
                section.getBoundingClientRect().top +
                window.scrollY;

            if (scrollPosition >= sectionTop) {
                activeId = section.id;
            }
        });

        setActiveMenu(activeId);
    }

    // Saat menu diklik
    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            const targetId =
                this.getAttribute('href').substring(1);

            setActiveMenu(targetId);
        });
    });

    // Saat halaman di-scroll
    window.addEventListener('scroll', updateActiveMenu, {
        passive: true
    });

    // Saat halaman pertama kali dibuka
    updateActiveMenu();

});
</script>

</body>
</html>