
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Teknisi | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    @vite('resources/css/teknisi-dashboard.css')
</head>

<body>

@php
    // DATA CONTOH FRONTEND
    $antrean = [
        [
            'id' => 'NS-241120',
            'nama' => 'Dinda Aulia',
            'perangkat' => 'iPhone 13 Pro',
            'keluhan' => 'Layar bergaris hijau setelah terjatuh',
            'status' => 'Dikerjakan',
            'waktu' => '',
            'nomor' => '01',
        ],
        [
            'id' => 'NS-241103',
            'nama' => 'Bagas Mahendra',
            'perangkat' => 'Samsung A54',
            'keluhan' => 'Tidak bisa mengisi daya',
            'status' => 'Berikutnya',
            'waktu' => '10:30',
            'nomor' => '02',
        ],
        [
            'id' => 'NS-241099',
            'nama' => 'Sinta Rahma',
            'perangkat' => 'iPhone 12',
            'keluhan' => 'Kamera belakang bergetar',
            'status' => 'Dalam antrean',
            'waktu' => '13:00',
            'nomor' => '03',
        ],
    ];

    $aktivitas = [
        [
            'judul' => 'Diagnosis Samsung S23 telah dikirim',
            'detail' => '#NS-241087 · Hasil diterima Nayla Admin',
            'waktu' => '08:42',
            'tipe' => 'success',
        ],
        [
            'judul' => 'Diagnosis iPhone 13 sedang diperiksa',
            'detail' => '#NS-241099 · Diperiksa oleh teknisi',
            'waktu' => 'Kemarin',
            'tipe' => 'info',
        ],
    ];

    $ikon = [
        'dashboard' => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>',
        'queue' => '<path d="M7 3h8l4 4v14H7z"/><path d="M15 3v5h4M10 12h6M10 16h6"/>',
        'history' => '<rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 16v-4M12 16V8M16 16v-6"/>',
        'phone' => '<rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2"/>',
        'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'tool' => '<path d="M14 7a5 5 0 0 0-7 7l-4 4a2 2 0 0 0 3 3l4-4a5 5 0 0 0 7-7l-4 4-3-3 4-4z"/>',
        'check' => '<path d="m5 12 5 5L20 7"/>',
        'arrow' => '<path d="M5 12h14m-6-6 6 6-6 6"/>',
        'logout' => '<path d="M10 4H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h5"/><path d="M14 16l4-4-4-4M8 12h10"/>',
    ];
@endphp

<div class="tech-layout">

    <!-- =====================================
         SIDEBAR
    ====================================== -->
    <aside class="tech-sidebar" id="techSidebar">

        <a class="tech-brand"
           href="{{ url('/teknisi/dashboard') }}">

            <span class="tech-brand-icon">N</span>

            <span class="tech-brand-name">
                NAYLA <strong>SERVICE</strong>
            </span>
        </a>

        <div class="tech-menu-caption">
            TECHNICIAN SPACE
        </div>

        <nav class="tech-sidebar-nav" aria-label="Navigasi teknisi">

            <a href="#dashboard"
               class="tech-nav-item active"
               data-section="dashboard">

                <svg viewBox="0 0 24 24">
                    {!! $ikon['dashboard'] !!}
                </svg>

                <span>Dashboard</span>
            </a>

            
            <a href="{{ route('teknisi.antrean') }}"
               class="tech-nav-item">

                <svg viewBox="0 0 24 24">
                    {!! $ikon['queue'] !!}
                </svg>

                <span>Antrean Saya</span>

                <span class="tech-nav-count">4</span>
            </a>

            <a href="{{ route('teknisi.riwayat') }}"
                class="tech-nav-item">

                <svg viewBox="0 0 24 24">
                    {!! $ikon['history'] !!}
                </svg>

                <span>Riwayat Pekerjaan</span>
            </a>

        </nav>

        <div class="tech-sidebar-footer">
            <div class="tech-user-avatar">RA</div>

            <div class="tech-user-info">
                <strong>Raka</strong>
                <span>Technician</span>
            </div>
        </div>

    </aside>

    <!-- =====================================
         MAIN CONTENT
    ====================================== -->
    <div class="tech-main" id="dashboard">

        <!-- TOPBAR -->
        <header class="tech-topbar">

            <div class="tech-topbar-left">
                <button type="button"
                        class="tech-mobile-toggle"
                        id="techMenuToggle"
                        aria-label="Buka menu">
                    ☰
                </button>

                <div>
                    <p class="tech-topbar-date">
                        SENIN, 18 NOVEMBER 2024
                    </p>

                    <h1>Dashboard</h1>
                </div>
            </div>

            <div class="tech-topbar-right">

                <div class="tech-duty-status">
                    <span class="tech-duty-dot"></span>
                    Sedang bertugas
                </div>

                <div class="tech-topbar-avatar">RA</div>

            </div>

        </header>

        <main class="tech-content">

            <!-- =====================================
                 HEADING
            ====================================== -->
            <section class="tech-welcome">

                <div class="tech-welcome-copy">

                    <p class="tech-eyebrow">
                        RINGKASAN HARI INI
                    </p>

                    <h2>Selamat pagi, Raka.</h2>

                    <p class="tech-welcome-description">
                        Berikut prioritas pekerjaan dan progres
                        diagnosis kamu hari ini.
                    </p>

                </div>

                <a class="tech-primary-button"
                   href="{{ route('teknisi.antrean') }}">

                    Buka antrean

                    <svg viewBox="0 0 24 24">
                        {!! $ikon['arrow'] !!}
                    </svg>
                </a>

            </section>

            <!-- =====================================
                 STATISTIC CARDS
            ====================================== -->
            <section class="tech-stats-grid"
                     aria-label="Ringkasan pekerjaan">

                <article class="tech-stat-card">

                    <div class="tech-stat-icon">

                        <svg viewBox="0 0 24 24">
                            {!! $ikon['phone'] !!}
                        </svg>

                    </div>

                    <p class="tech-stat-label">
                        Antrean hari ini
                    </p>

                    <h3>04</h3>

                    <p class="tech-stat-caption">
                        1 sedang dikerjakan
                    </p>

                </article>

                <article class="tech-stat-card">

                    <div class="tech-stat-icon">

                        <svg viewBox="0 0 24 24">
                            {!! $ikon['clock'] !!}
                        </svg>

                    </div>

                    <p class="tech-stat-label">
                        Perlu diagnosis
                    </p>

                    <h3>03</h3>

                    <p class="tech-stat-caption">
                        Sesuai urutan antrean
                    </p>

                </article>

                <article class="tech-stat-card">

                    <div class="tech-stat-icon">

                        <svg viewBox="0 0 24 24">
                            {!! $ikon['tool'] !!}
                        </svg>

                    </div>

                    <p class="tech-stat-label">
                        Sedang dikerjakan
                    </p>

                    <h3>01</h3>

                    <p class="tech-stat-caption">
                        iPhone 13 Pro
                    </p>

                </article>

                <article class="tech-stat-card">

                    <div class="tech-stat-icon">

                        <svg viewBox="0 0 24 24">
                            {!! $ikon['check'] !!}
                        </svg>

                    </div>

                    <p class="tech-stat-label">
                        Selesai minggu ini
                    </p>

                    <h3>21</h3>

                    <p class="tech-stat-caption">
                        +12% dari minggu lalu
                    </p>

                </article>

            </section>

            <!-- =====================================
                 ANTREAN & PRODUCTIVITY
            ====================================== -->
            <div class="tech-dashboard-grid">

                <!-- ANTREAN DIAGNOSIS -->
                <section class="tech-panel tech-queue-panel"
                         id="antrean">

                    <div class="tech-panel-header">

                        <div>
                            <p class="tech-eyebrow">
                                PRIORITAS BERIKUTNYA
                            </p>

                            <h3>Antrean diagnosis</h3>

                            <p class="tech-panel-description">
                                Urutan perangkat yang perlu
                                segera diperiksa.
                            </p>
                        </div>

                        <a href="#antrean"
                           class="tech-text-link">
                            Lihat semua
                            <span>→</span>
                        </a>

                    </div>

                    <div class="tech-queue-list">

                        @foreach($antrean as $index => $item)

                            <article class="tech-queue-item
                                {{ $index === 0 ? 'is-current' : '' }}">

                                <div class="tech-queue-number
                                    {{ $index === 0 ? 'is-gold' : '' }}">

                                    {{ $item['nomor'] }}

                                </div>

                                <div class="tech-queue-info">

                                    <p class="tech-queue-id">
                                        #{{ $item['id'] }}
                                    </p>

                                    <h4>{{ $item['nama'] }}</h4>

                                    <p class="tech-queue-detail">
                                        {{ $item['perangkat'] }}
                                        ·
                                        {{ $item['keluhan'] }}
                                    </p>

                                </div>

                                <div class="tech-queue-actions">

                                    @if($index === 0)

                                        <span class="tech-queue-badge working">
                                            Dikerjakan
                                        </span>

                                        <button
                                            type="button"
                                            class="tech-continue-button"
                                            data-order="{{ $item['id'] }}"
                                            data-customer="{{ $item['nama'] }}"
                                            data-device="{{ $item['perangkat'] }}"
                                            data-problem="{{ $item['keluhan'] }}"
                                        >
                                            Lanjutkan
                                        </button>

                                    @elseif($index === 1)

                                        <span class="tech-queue-badge next">
                                            Berikutnya
                                        </span>

                                        <span class="tech-queue-time">
                                            {{ $item['waktu'] }}
                                        </span>

                                    @else

                                        <span class="tech-queue-badge waiting">
                                            Dalam antrean
                                        </span>

                                        <span class="tech-queue-time">
                                            {{ $item['waktu'] }}
                                        </span>

                                    @endif

                                </div>

                            </article>

                        @endforeach

                    </div>

                </section>

                <!-- PRODUKTIVITAS -->
                <section class="tech-panel tech-productivity-panel">

                    <div class="tech-panel-header tech-productivity-heading">

                        <div>
                            <p class="tech-eyebrow">
                                PROGRES MINGGU INI
                            </p>

                            <h3>Produktivitas</h3>
                        </div>

                        <span class="tech-progress-badge">
                            +12%
                        </span>

                    </div>

                    <div class="tech-productivity-chart">

                        <div class="tech-chart-summary">
                            <strong>21</strong>

                            <span>diagnosis selesai</span>
                        </div>

                        <div class="tech-bar-chart"
                             aria-label="Grafik produktivitas mingguan">

                            @foreach([29, 47, 36, 58, 72, 62, 80] as $index => $height)

                                <div class="tech-chart-bar
                                    {{ $index === 6 ? 'is-highlight' : '' }}"
                                    style="height: {{ $height }}%">
                                </div>

                            @endforeach

                        </div>

                    </div>

                    <div class="tech-productivity-details">

                        <div>
                            <span>RATA-RATA DIAGNOSIS</span>
                            <strong>42 menit</strong>
                        </div>

                        <div>
                            <span>TEPAT WAKTU</span>
                            <strong>94%</strong>
                        </div>

                        <div>
                            <span>PERLU REVISI ADMIN</span>
                            <strong>2 hasil</strong>
                        </div>

                    </div>

                </section>

            </div>

            <!-- =====================================
                 AKTIVITAS TERBARU
            ====================================== -->
            <section class="tech-panel tech-activity-panel"
                     id="riwayat">

                <div class="tech-panel-header">

                    <div>
                        <p class="tech-eyebrow">
                            AKTIVITAS TERBARU
                        </p>

                        <h3>Pekerjaan terakhir</h3>
                    </div>

                    <a href="#riwayat"
                       class="tech-text-link">
                        Buka riwayat
                        <span>→</span>
                    </a>

                </div>

                <div class="tech-activity-list">

                    @foreach($aktivitas as $item)

                        <div class="tech-activity-item">

                            <span class="tech-activity-icon
                                {{ $item['tipe'] }}">

                                @if($item['tipe'] === 'success')
                                    <svg viewBox="0 0 24 24">
                                        {!! $ikon['check'] !!}
                                    </svg>
                                @else
                                    <svg viewBox="0 0 24 24">
                                        {!! $ikon['queue'] !!}
                                    </svg>
                                @endif

                            </span>

                            <div class="tech-activity-info">

                                <h4>{{ $item['judul'] }}</h4>

                                <p>{{ $item['detail'] }}</p>

                            </div>

                            <time class="tech-activity-time">
                                {{ $item['waktu'] }}
                            </time>

                        </div>

                    @endforeach

                </div>

            </section>

        </main>
    </div>

</div>

<!-- =====================================
     MODAL DETAIL PEKERJAAN
====================================== -->
<div class="tech-modal-backdrop"
     id="techOrderModal"
     hidden>

    <div class="tech-modal"
         role="dialog"
         aria-modal="true"
         aria-labelledby="techModalTitle">

        <div class="tech-modal-header">
            <h3 id="techModalTitle">Detail Diagnosis</h3>

            <button type="button"
                    id="techModalClose"
                    aria-label="Tutup">
                ×
            </button>
        </div>

        <div class="tech-modal-body">
            <p><span>Nomor Pesanan</span><strong id="modalOrderId"></strong></p>
            <p><span>Pelanggan</span><strong id="modalCustomer"></strong></p>
            <p><span>Perangkat</span><strong id="modalDevice"></strong></p>
            <p><span>Keluhan</span><strong id="modalProblem"></strong></p>

            <div class="tech-modal-notice">
                Tampilan diagnosis ini masih berupa frontend.
                Pencatatan hasil diagnosis akan terhubung
                dengan backend pada tahap berikutnya.
            </div>
        </div>

        <div class="tech-modal-footer">
            <button type="button"
                    id="techModalDone"
                    class="tech-primary-button">
                Tutup Detail
            </button>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // SIDEBAR MOBILE
    const menuToggle = document.getElementById('techMenuToggle');
    const sidebar = document.getElementById('techSidebar');

    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('is-open');
        });
    }

    const navItems = document.querySelectorAll('.tech-nav-item');

    navItems.forEach(item => {
        item.addEventListener('click', function () {

            navItems.forEach(link => {
                link.classList.remove('active');
            });

            this.classList.add('active');
            sidebar?.classList.remove('is-open');
        });
    });

    // DETAIL ANTREAN
    const modal = document.getElementById('techOrderModal');
    const closeButton = document.getElementById('techModalClose');
    const doneButton = document.getElementById('techModalDone');

    function closeModal() {
        if (!modal) return;

        modal.hidden = true;
        document.body.classList.remove('tech-modal-open');
    }

    document.querySelectorAll('.tech-continue-button').forEach(button => {

        button.addEventListener('click', function () {

            document.getElementById('modalOrderId').textContent =
                this.dataset.order;

            document.getElementById('modalCustomer').textContent =
                this.dataset.customer;

            document.getElementById('modalDevice').textContent =
                this.dataset.device;

            document.getElementById('modalProblem').textContent =
                this.dataset.problem;

            modal.hidden = false;
            document.body.classList.add('tech-modal-open');
            closeButton.focus();
        });

    });

    closeButton?.addEventListener('click', closeModal);
    doneButton?.addEventListener('click', closeModal);

    modal?.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal && !modal.hidden) {
            closeModal();
        }
    });

});
</script>

</body>
</html>