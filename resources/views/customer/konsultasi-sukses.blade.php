
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Konsultasi | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite('resources/css/customer-konsultasi-sukses.css')
</head>
<body>

<div class="page-container">

    <!-- NAVBAR -->
    <header class="site-header">
        <nav class="navbar">

            <a href="{{ route('customer.home') }}" class="brand">
                <span class="brand-logo">N</span>
                <span>NAYLA <strong>SERVICE</strong></span>
            </a>

            <button type="button"
                    class="menu-toggle"
                    id="menuToggle"
                    aria-controls="navLinks"
                    aria-expanded="false"
                    aria-label="Buka menu">
                ☰
            </button>

            <div class="nav-links" id="navLinks">
                <a href="{{ route('customer.home') }}">Beranda</a>
                <a href="{{ route('customer.layanan') }}">Layanan</a>
                <a href="{{ route('customer.lokasi') }}">Lokasi</a>
                <a href="{{ route('customer.konsultasi') }}"
                   class="active" aria-current="page">
                    Konsultasi
                </a>
                <a href="{{ route('customer.status') }}">Cek Status</a>
            </div>

        </nav>
    </header>

    <!-- KONFIRMASI -->
    <main class="success-section">

        <section class="success-card">

            <div class="success-content">

                <div class="success-decoration">

                    <!-- BINTANG KIRI -->
                    <svg class="sparkle sparkle-left"
                         viewBox="0 0 24 24">
                        <path d="m12 2 2.2 7.8L22 12l-7.8 2.2L12 22l-2.2-7.8L2 12l7.8-2.2z"/>
                    </svg>

                    <!-- CENTANG -->
                    <div class="success-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="m5 12 4 4L19 6"/>
                        </svg>
                    </div>

                    <!-- BINTANG KANAN -->
                    <svg class="sparkle sparkle-right"
                         viewBox="0 0 24 24">
                        <path d="m12 2 2.2 7.8L22 12l-7.8 2.2L12 22l-2.2-7.8L2 12l7.8-2.2z"/>
                    </svg>

                </div>

                <h1>
                    
                     Konsultasi <span>berhasil dikirim.</span>
                
                </h1>

                <p>
                    
                     Terima kasih telah menghubungi kami.
                    Tim kami akan segera menghubungi kamu.
                    
                </p>

                <a href="{{ route('customer.home') }}"
                   class="back-button">
                    Kembali ke Beranda
                    <span aria-hidden="true">→</span>
                </a>

            </div>

        </section>

    </main>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('menuToggle');
    const menu = document.getElementById('navLinks');

    toggle.addEventListener('click', function () {
        const isOpen = menu.classList.toggle('show');
        toggle.setAttribute('aria-expanded', String(isOpen));
    });
});
</script>

</body>
</html>