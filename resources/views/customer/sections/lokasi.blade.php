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



