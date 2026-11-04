
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lokasi | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite('resources/css/customer-lokasi.css')
</head>
<body>

<div class="page-container">

    <!-- NAVBAR -->
    <header class="site-header">
        <nav class="navbar" aria-label="Navigasi utama">

            <a href="{{ route('customer.home') }}" class="brand">
                <div class="brand-logo">N</div>

                <span>
                    NAYLA <strong>SERVICE</strong>
                </span>
            </a>

            <button
                class="menu-toggle"
                id="menuToggle"
                type="button"
                aria-label="Buka menu"
                aria-expanded="false"
                aria-controls="navLinks"
            >
                ☰
            </button>

            <div class="nav-links" id="navLinks">

                <a href="{{ route('customer.home') }}">
                    Beranda
                </a>

                <a href="{{ route('customer.layanan') }}">
                    Layanan
                </a>

                <a href="{{ route('customer.lokasi') }}"
                   class="active"
                   aria-current="page">
                    Lokasi
                </a>

                <a href="{{ route('customer.konsultasi') }}">Konsultasi</a>
                <a href="{{ route('customer.status') }}">Cek Status</a>

            </div>

        </nav>
    </header>

    <!-- KONTEN LOKASI -->
    <main class="location-section">

        <!-- JUDUL -->
        <div class="location-heading">

            <p class="section-label">
                KUNJUNGI WORKSHOP
            </p>

            <h1>
                Datang dan konsultasikan langsung.
            </h1>

            <p class="subtitle">
                Tim kami siap membantu pengecekan awal perangkatmu.
            </p>

        </div>

        <!-- CARD LOKASI -->
        <section class="location-card">

            <!-- PANEL KIRI -->
            <div class="location-visual">

                <div class="visual-content">

                    <!-- ICON LOKASI -->
                    <div class="location-icon">
                        <svg
                            width="44"
                            height="44"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                    </div>

                    <p>NAYLA CELLULAR</p>

                </div>

            </div>

            <!-- PANEL KANAN -->
            <div class="location-information">

                <p class="info-label">
                    INFORMASI LOKASI
                </p>

                <h2>Nayla Cellular</h2>

                <p class="address">
                    Jl. Raya Pasar Serpong
                    (Samping Pintu Masuk Pasar)
                </p>

                <!-- JAM OPERASIONAL -->
                <div class="info-detail">

                    <span>JAM OPERASIONAL</span>

                    <strong>
                        Senin–Minggu, 09.00–21.00
                    </strong>

                </div>

                <!-- WHATSAPP -->
                <div class="info-detail">

                    <span>WHATSAPP</span>

                    <strong>
                        0813-8925-1975
                    </strong>

                </div>

                <!-- GOOGLE MAPS -->
                <a
                    href="https://www.google.com/maps/search/?api=1&amp;query=Nayla+Cellular+Jl.+Raya+Pasar+Serpong"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="maps-button"
                >
                    <span>Buka di Google Maps</span>
                    <span class="arrow" aria-hidden="true">→</span>
                </a>

            </div>

        </section>

    </main>

</div>

<script>
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', function () {
        const isOpen = navLinks.classList.toggle('show');

        menuToggle.setAttribute(
            'aria-expanded',
            String(isOpen)
        );
    });

    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', function () {
            navLinks.classList.remove('show');
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    });
</script>

</body>
</html>
