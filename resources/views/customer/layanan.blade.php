<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite('resources/css/customer-layanan.css')
</head>

<body>

    @php
        $layanan = [
            [
                'nama' => 'Ganti Layar',
                'kategori' => 'hardware',
                'deskripsi' =>
                    'Layar retak, bergaris, atau tidak responsif? Kami siap bantu mengatasinya dengan suku cadang berkualitas.',
                'gambar' => 'ganti-layar.jpg',
                'ikon' => 'smartphone',
            ],
            [
                'nama' => 'Ganti Baterai',
                'kategori' => 'hardware',
                'deskripsi' =>
                    'Baterai cepat habis, kembung, atau sulit mengisi daya? Temukan solusi baterai yang tepat di sini.',
                'gambar' => 'ganti-baterai.jpg',
                'ikon' => 'battery',
            ],
            [
                'nama' => 'Perbaikan Mesin & Kena Air',
                'kategori' => 'hardware',
                'deskripsi' =>
                    'HP mati total, error, atau terkena cairan? Konsultasikan kondisi perangkatmu untuk penanganan mendalam.',
                'gambar' => 'perbaikan-mesin.jpg',
                'ikon' => 'wrench',
            ],
            [
                'nama' => 'Charging Port',
                'kategori' => 'hardware',
                'deskripsi' =>
                    'Pengisian daya bermasalah atau konektor longgar? Teknisi kami siap membantu memperbaiki jalur pengisian daya.',
                'gambar' => 'charging-port.jpg',
                'ikon' => 'charging',
            ],
            [
                'nama' => 'Software & Data',
                'kategori' => 'software',
                'deskripsi' =>
                    'Bootloop, error sistem, atau masalah kehilangan data? Kami menyediakan layanan flashing dan recovery.',
                'gambar' => 'software-data.jpg',
                'ikon' => 'settings',
            ],
            [
                'nama' => 'Pengecekan Umum',
                'kategori' => 'lainnya',
                'deskripsi' =>
                    'Belum tahu apa masalah HP-mu? Kami bantu pemeriksaan menyeluruh untuk mendiagnosis kerusakan.',
                'gambar' => 'pengecekan-umum.jpg',
                'ikon' => 'search',
            ],
            [
                'nama' => 'Speaker & Mikrofon',
                'kategori' => 'hardware',
                'deskripsi' =>
                    'Suara pecah, hilang, atau mikrofon bermasalah? Nikmati kembali kualitas audio jernih pada perangkat Anda.',
                'gambar' => 'speaker-mikrofon.jpg',
                'ikon' => 'volume',
            ],
            [
                'nama' => 'Tombol Power',
                'kategori' => 'hardware',
                'deskripsi' =>
                    'Tombol power macet atau tidak berfungsi? Kami siap membantu perbaikannya agar navigasi kembali lancar.',
                'gambar' => 'tombol-power.jpg',
                'ikon' => 'power',
            ],
            [
                'nama' => 'Perbaikan Kamera',
                'kategori' => 'hardware',
                'deskripsi' =>
                    'Kamera buram, tidak fokus, atau tidak berfungsi? Kami membantu pemeriksaan komponen kamera.',
                'gambar' => 'perbaikan-kamera.jpg',
                'ikon' => 'camera',
            ],
            [
                'nama' => 'Lupa Password & Reset HP',
                'kategori' => 'software',
                'deskripsi' => 'Kesulitan mengakses HP sendiri? Dapatkan bantuan reset kunci layar sesuai dengan prosedur pemulihan perangkat.',
                'gambar' => 'lupa-password.jpg',
                'ikon' => 'lock',
            ],
            [
                'nama' => 'Bantuan Bypass iPhone',
                'kategori' => 'software',
                'deskripsi' =>
                    'Mengalami kendala aktivasi atau iCloud pada iPhone? Konsultasikan opsi pemulihan dan penanganan resmi.',
                'gambar' => 'bypass-iphone.jpg',
                'ikon' => 'shield',
            ],
            [
                'nama' => 'Antigores & Hydrogel',
                'kategori' => 'lainnya',
                'deskripsi' =>
                    'Lindungi layar perangkatmu dengan pilihan pelindung layar kaca atau hydrogel berkualitas tinggi.',
                'gambar' => 'hydrogel.jpg',
                'ikon' => 'layers',
            ],
            [
                'nama' => 'Sparepart HP',
                'kategori' => 'lainnya',
                'deskripsi' =>
                    'Kami menyediakan berbagai sparepart HP dengan pilihan komponen sesuai tipe perangkat Anda.',
                'gambar' => 'sparepart-hp.jpg',
                'ikon' => 'box',
            ],
        ];
    @endphp

    <div class="page-container">

        <!-- NAVBAR -->
        <header class="site-header">
            <nav class="navbar">

                <a href="{{ route('customer.home') }}" class="brand">
                    <div class="brand-logo">N</div>
                    <span>NAYLA <strong>SERVICE</strong></span>
                </a>

                <button type="button" class="menu-toggle" id="menuToggle" aria-controls="navLinks"
                    aria-expanded="false" aria-label="Buka navigasi">
                    ☰
                </button>

                <div class="nav-links" id="navLinks">

                    <a href="{{ route('customer.home') }}">
                        Beranda
                    </a>

                    <a href="{{ route('customer.layanan') }}" class="active" aria-current="page">
                        Layanan
                    </a>

                    <a href="{{ route('customer.lokasi') }}">
                        Lokasi
                    </a>

                    <a href="{{ route('customer.konsultasi') }}">
                        Konsultasi
                    </a>

                    <a href="{{ route('customer.status') }}">
                        Cek Status
                    </a>

                </div>
            </nav>
        </header>

        <!-- HALAMAN LAYANAN -->
        <main class="services-section">

            <!-- JUDUL -->
            <section class="services-heading">
                <p class="eyebrow">LAYANAN KAMI</p>

                <h1>
                    Solusi lengkap untuk
                    <span>perangkatmu.</span>
                </h1>

                <p class="subtitle">
                    Pilih layanan sesuai kebutuhan perangkatmu.
                    Kami siap membantu dengan layanan terbaik
                    dan teknisi berpengalaman.
                </p>
            </section>

            <!-- FILTER LAYANAN -->
            <div class="filter-container" role="group" aria-label="Kategori layanan">

                <button type="button" class="filter-button active" data-filter="semua" aria-pressed="true">
                    Semua
                </button>

                <button type="button" class="filter-button" data-filter="hardware" aria-pressed="false">
                    Hardware
                </button>

                <button type="button" class="filter-button" data-filter="software" aria-pressed="false">
                    Software
                </button>

                <button type="button" class="filter-button" data-filter="lainnya" aria-pressed="false">
                    Lainnya
                </button>

            </div>

            <!-- KARTU LAYANAN -->
            <div class="services-grid" id="servicesGrid">

                @foreach ($layanan as $index => $item)

                    <article class="service-card" data-category="{{ $item['kategori'] }}"
                        @if ($index >= 6) hidden @endif>

                        <!-- FOTO BACKGROUND -->
                        <div class="service-image"
                            style="background-image: url('{{ asset('images/layanan/' . $item['gambar']) }}')">
                        </div>

                        <div class="service-overlay"></div>

                        <!-- KONTEN KARTU -->
                        <div class="service-content">

                            <!-- IKON -->
                            <div class="service-icon">
                                @switch($item['ikon'])
                                    @case('smartphone')
                                        <svg viewBox="0 0 24 24">
                                            <rect x="6" y="2" width="12" height="20" rx="2" />
                                            <path d="M10 18h4" />
                                        </svg>
                                    @break

                                    @case('battery')
                                        <svg viewBox="0 0 24 24">
                                            <rect x="6" y="4" width="12" height="17" rx="2" />
                                            <path d="M10 2h4M13 7l-3 5h4l-3 5" />
                                        </svg>
                                    @break

                                    @case('wrench')
                                        <svg viewBox="0 0 24 24">
                                            <path d="M21 7a6 6 0 0 1-7 7l-7 7-4-4 7-7a6 6 0 0 1 7-7l-4 4 4 4z" />
                                        </svg>
                                    @break

                                    @case('charging')
                                        <svg viewBox="0 0 24 24">
                                            <rect x="4" y="6" width="16" height="11" rx="2" />
                                            <path d="M9 17v3h6v-3M8 10h8M10 13h4" />
                                        </svg>
                                    @break

                                    @case('settings')
                                        <svg viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3" />
                                            <path
                                                d="M10 2h4l1 3 3 1 3-1 2 4-2 3 1 3-2 4-3-1-3 1-1 3h-4l-1-3-3-1-3 1-2-4 2-3-1-3 2-4 3 1 3-1z"
                                                transform="translate(1 1) scale(.9)" />
                                        </svg>
                                    @break

                                    @case('search')
                                        <svg viewBox="0 0 24 24">
                                            <circle cx="10" cy="10" r="7" />
                                            <path d="m15 15 6 6" />
                                        </svg>
                                    @break

                                    @case('volume')
                                        <svg viewBox="0 0 24 24">
                                            <path d="M4 9h4l5-4v14l-5-4H4z" />
                                            <path d="M16 9a5 5 0 0 1 0 6" />
                                            <path d="M19 6a9 9 0 0 1 0 12" />
                                        </svg>
                                    @break

                                    @case('power')
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 2v10" />
                                            <path d="M6 5a9 9 0 1 0 12 0" />
                                        </svg>
                                    @break

                                    @case('camera')
                                        <svg viewBox="0 0 24 24">
                                            <path d="M3 7h4l2-3h6l2 3h4v13H3z" />
                                            <circle cx="12" cy="13" r="4" />
                                        </svg>
                                    @break

                                    @case('shield')
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 2 20 6v6c0 5-4 8-8 10-4-2-8-5-8-10V6z" />
                                            <path d="m9 12 2 2 4-4" />
                                        </svg>
                                    @break

                                    @case('layers')
                                        <svg viewBox="0 0 24 24">
                                            <path d="m12 2 9 5-9 5-9-5z" />
                                            <path d="m3 12 9 5 9-5" />
                                            <path d="m3 17 9 5 9-5" />
                                        </svg>
                                    @break

                                    @case('box')
                                        <svg viewBox="0 0 24 24">
                                            <path d="m12 2 9 5v10l-9 5-9-5V7z" />
                                            <path d="m3 7 9 5 9-5M12 12v10" />
                                        </svg>
                                    @break
                                    
                                    @case('lock')
                                        <svg viewBox="0 0 24 24">
                                            <rect x="5" y="10" width="14" height="11" rx="2"/>
                                            <path d="M8 10V7a4 4 0 0 1 8 0v3"/>
                                            <circle cx="12" cy="15" r="1"/>
                                        </svg>
                                        @break

                                @endswitch
                            </div>

                            <!-- JUDUL DAN DESKRIPSI -->
                            <div class="service-text">
                                <h2>{{ $item['nama'] }}</h2>
                                <p>{{ $item['deskripsi'] }}</p>
                            </div>

                        </div>
                    </article>

                @endforeach


    </div>

    <!-- TOMBOL TAMPILKAN SEMUA -->
    <div class="show-more-container">

        <button type="button" id="showMoreButton" class="show-more-button" aria-expanded="false">

            <span id="showMoreText">
                Tampilkan Semua
            </span>

            <span class="chevron" aria-hidden="true">
                 <svg viewBox="0 0 24 24">
                    <path d="m6 9 6 6 6-6"/>
                 </svg>
            </span>
        </button>

        <p id="serviceCounter" class="service-counter" aria-live="polite">
            Menampilkan 6 dari {{ count($layanan) }} layanan
        </p>

    </div>

    </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // NAVBAR MOBILE
            const menuToggle = document.getElementById('menuToggle');
            const navLinks = document.getElementById('navLinks');

            menuToggle.addEventListener('click', function() {
                const open = navLinks.classList.toggle('show');

                menuToggle.setAttribute(
                    'aria-expanded',
                    String(open)
                );
            });

            // ELEMEN FILTER
            const filterButtons = document.querySelectorAll('.filter-button');

            const serviceCards = Array.from(
                document.querySelectorAll('.service-card')
            );

            const showMoreButton = document.getElementById('showMoreButton');
            const showMoreText = document.getElementById('showMoreText');
            const counter = document.getElementById('serviceCounter');

            let activeFilter = 'semua';
            let showAll = false;

            function updateServices() {

                // CARI KARTU SESUAI KATEGORI
                const matchingCards = serviceCards.filter(card => {
                    return activeFilter === 'semua' ||
                        card.dataset.category === activeFilter;
                });

                // BATAS ENAM KARTU
                const visibleCount = showAll ?
                    matchingCards.length :
                    Math.min(6, matchingCards.length);

                // SEMBUNYIKAN SEMUA
                serviceCards.forEach(card => {
                    card.hidden = true;
                });

                // TAMPILKAN KARTU YANG SESUAI
                matchingCards.forEach((card, index) => {
                    card.hidden = index >= visibleCount;
                });

                // UPDATE JUMLAH
                counter.textContent =
                    `Menampilkan ${visibleCount} dari ${matchingCards.length} layanan`;

                // TOMBOL TAMPILKAN SEMUA
                const needsToggle = matchingCards.length > 6;

                showMoreButton.hidden = !needsToggle;

                if (needsToggle) {
                    showMoreText.textContent = showAll ?
                        'Tampilkan Lebih Sedikit' :
                        'Tampilkan Semua';

                    showMoreButton.setAttribute(
                        'aria-expanded',
                        String(showAll)
                    );
                }
            }

            // KLIK FILTER
            filterButtons.forEach(button => {

                button.addEventListener('click', function() {

                    filterButtons.forEach(btn => {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-pressed', 'false');
                    });

                    this.classList.add('active');
                    this.setAttribute('aria-pressed', 'true');

                    activeFilter = this.dataset.filter;

                    // RESET SAAT GANTI KATEGORI
                    showAll = false;

                    updateServices();
                });

            });

            // KLIK TAMPILKAN SEMUA
            showMoreButton.addEventListener('click', function() {

                showAll = !showAll;
                updateServices();

            });

            // TAMPILAN AWAL
            updateServices();

        });
    </script>

</body>

</html>
