
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Antrean Saya | Nayla Service</title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    @vite('resources/css/teknisi-antrean.css')
</head>
<body>

@php
    // Data frontend sementara, belum terhubung database.
    $antrean = [
        [
            'nomor' => '01',
            'pesanan' => 'NS-241120',
            'nama' => 'Dinda Aulia',
            'masuk' => '09:15',
            'perangkat' => 'iPhone 13 Pro',
            'keluhan' => 'Layar bergaris hijau setelah terjatuh',
            'status' => 'Dikerjakan',
            'tipe' => 'working',
        ],
        [
            'nomor' => '02',
            'pesanan' => 'NS-241103',
            'nama' => 'Bagas Mahendra',
            'masuk' => '10:30',
            'perangkat' => 'Samsung A54',
            'keluhan' => 'Tidak bisa mengisi daya',
            'status' => 'Berikutnya',
            'tipe' => 'next',
        ],
        [
            'nomor' => '03',
            'pesanan' => 'NS-241099',
            'nama' => 'Sinta Rahma',
            'masuk' => '13:00',
            'perangkat' => 'iPhone 12',
            'keluhan' => 'Kamera belakang bergetar',
            'status' => 'Dalam antrean',
            'tipe' => 'waiting',
        ],
        [
            'nomor' => '04',
            'pesanan' => 'NS-241092',
            'nama' => 'Farhan',
            'masuk' => '14:20',
            'perangkat' => 'Poco F5',
            'keluhan' => 'Mati total',
            'status' => 'Dalam antrean',
            'tipe' => 'waiting',
        ],
    ];
@endphp

<div class="tech-layout">

    <!-- SIDEBAR -->
    <aside class="tech-sidebar" id="techSidebar">

        <a href="{{ route('teknisi.dashboard') }}"
           class="tech-brand">

            <span class="tech-brand-icon">N</span>

            <span class="tech-brand-name">
                NAYLA <strong>SERVICE</strong>
            </span>
        </a>

        <div class="tech-menu-caption">
            TECHNICIAN SPACE
        </div>

        <nav class="tech-sidebar-nav"
             aria-label="Menu teknisi">

            <a href="{{ route('teknisi.dashboard') }}"
               class="tech-nav-item">

                <svg viewBox="0 0 24 24">
                    <rect x="3" y="3" width="7" height="7"
                          rx="1"/>
                    <rect x="14" y="3" width="7" height="7"
                          rx="1"/>
                    <rect x="3" y="14" width="7" height="7"
                          rx="1"/>
                    <rect x="14" y="14" width="7" height="7"
                          rx="1"/>
                </svg>

                <span>Dashboard</span>
            </a>

            <a href="{{ route('teknisi.antrean') }}"
               class="tech-nav-item active"
               aria-current="page">

                <svg viewBox="0 0 24 24">
                    <path d="M7 3h8l4 4v14H7z"/>
                    <path d="M15 3v5h4"/>
                    <path d="M10 12h6M10 16h6"/>
                </svg>

                <span>Antrean Saya</span>

                <span class="tech-nav-count">4</span>
            </a>

           <a href="{{ route('teknisi.riwayat') }}"
                class="tech-nav-item">
            

                <svg viewBox="0 0 24 24">
                    <rect x="4" y="3" width="16"
                          height="18" rx="2"/>
                    <path d="M8 16v-4M12 16V8M16 16v-6"/>
                </svg>

                <span>Riwayat Pekerjaan</span>
            </a>

        </nav>

        <div class="tech-sidebar-footer">

            <div class="tech-user-avatar">RA</div>

            <div class="tech-user-info">
                <strong>Teknisi</strong>
                <span>Technician</span>
            </div>

        </div>
    </aside>

    <!-- MAIN -->
    <div class="tech-main">

        <!-- TOPBAR -->
        <header class="tech-topbar">

            <div class="tech-topbar-left">

                <button type="button"
                        class="tech-mobile-toggle"
                        id="techMenuToggle"
                        aria-label="Buka menu teknisi">
                    ☰
                </button>

                <div>
                    <p class="tech-topbar-date">
                        SENIN, 18 NOVEMBER 2024
                    </p>

                    <h1>Antrean Saya</h1>
                </div>
            </div>

            <div class="tech-topbar-right">

                <span class="tech-duty-status">
                    <span class="tech-duty-dot"></span>
                    Sedang bertugas
                </span>

                <span class="tech-topbar-avatar">RA</span>

            </div>

        </header>

        <!-- CONTENT -->
        <main class="tech-content">

            <section class="queue-heading">

                <div class="queue-heading-copy">

                    <p class="tech-eyebrow">
                        ANTREAN TERURUT
                    </p>

                    <h2>Antrean Saya</h2>

                    <p class="queue-description">
                        Kerjakan diagnosis berdasarkan urutan
                        yang sudah ditetapkan admin.
                    </p>

                </div>

                <div class="queue-summary">

                    <div class="queue-summary-item">
                        <span>Antrean tersisa</span>
                        <strong>4</strong>
                    </div>

                    <div class="queue-summary-item">
                        <span>Estimasi selesai</span>
                        <strong>15:30</strong>
                    </div>

                </div>

            </section>

            <!-- INFORMASI URUTAN -->
            <div class="queue-notice">

                <svg viewBox="0 0 24 24"
                     aria-hidden="true">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 7v5l3 2"/>
                </svg>

                <p>
                    <strong>Selesaikan sesuai urutan.</strong>
                    Pesanan berikutnya dapat dibuka setelah
                    hasil diagnosis aktif dikirim ke admin.
                </p>

            </div>

            <!-- TABEL ANTREAN -->
            <section class="queue-table-card"
                     aria-label="Daftar antrean saya">

                <div class="queue-table-scroll">

                    <table class="queue-table">

                        <thead>
                            <tr>
                                <th>URUTAN</th>
                                <th>PESANAN &amp; CUSTOMER</th>
                                <th>PERANGKAT</th>
                                <th>KELUHAN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($antrean as $item)

                                <tr class="{{ $item['tipe'] === 'working' ? 'queue-active-row' : '' }}">

                                    <!-- URUTAN -->
                                    <td>
                                        <span class="queue-number
                                            {{ $item['tipe'] === 'working' ? 'queue-number-active' : '' }}">

                                            {{ $item['nomor'] }}

                                        </span>
                                    </td>

                                    <!-- PESANAN -->
                                    <td>
                                        <div class="queue-customer">

                                            <strong>
                                                {{ $item['nama'] }}
                                            </strong>

                                            <span>
                                                #{{ $item['pesanan'] }}
                                                · Masuk {{ $item['masuk'] }}
                                            </span>

                                        </div>
                                    </td>

                                    <!-- PERANGKAT -->
                                    <td>
                                        <span class="queue-device">
                                            {{ $item['perangkat'] }}
                                        </span>
                                    </td>

                                    <!-- KELUHAN -->
                                    <td>
                                        <span class="queue-problem">
                                            {{ $item['keluhan'] }}
                                        </span>
                                    </td>

                                    <!-- STATUS -->
                                    <td>
                                        <span class="queue-status
                                            queue-status-{{ $item['tipe'] }}">

                                            {{ $item['status'] }}

                                        </span>
                                    </td>

                                    <!-- AKSI -->
                                    <td>
                                        @if($item['tipe'] === 'working')

                                            <a href="{{ route('teknisi.diagnosis') }}"
                                            class="queue-open-button">

                                                Buka diagnosis

                                                <svg viewBox="0 0 24 24">
                                                    <path d="M5 12h14"/>
                                                    <path d="m13 6 6 6-6 6"/>
                                                </svg>

                                            </a>


                                        @else

                                            <button
                                                type="button"
                                                class="queue-wait-button"
                                                disabled
                                                title="Selesaikan diagnosis aktif terlebih dahulu"
                                            >
                                                <svg viewBox="0 0 24 24">
                                                    <circle cx="12" cy="12" r="9"/>
                                                    <path d="M12 7v5l3 2"/>
                                                </svg>

                                                Menunggu
                                            </button>

                                        @endif
                                    </td>

                                </tr>

                            @endforeach
                        </tbody>

                    </table>

                </div>

            </section>

        </main>
    </div>
</div>

<!-- MODAL DETAIL DIAGNOSIS -->
<div class="queue-modal-backdrop"
     id="queueDiagnosisModal"
     hidden>

    <div class="queue-modal"
         role="dialog"
         aria-modal="true"
         aria-labelledby="queueModalTitle">

        <div class="queue-modal-header">

            <h2 id="queueModalTitle">
                Detail Diagnosis
            </h2>

            <button type="button"
                    id="queueModalClose"
                    aria-label="Tutup dialog">
                ×
            </button>

        </div>

        <div class="queue-modal-body">

            <div>
                <span>Nomor Pesanan</span>
                <strong id="queueModalOrder"></strong>
            </div>

            <div>
                <span>Pelanggan</span>
                <strong id="queueModalCustomer"></strong>
            </div>

            <div>
                <span>Perangkat</span>
                <strong id="queueModalDevice"></strong>
            </div>

            <div>
                <span>Keluhan</span>
                <strong id="queueModalProblem"></strong>
            </div>

            <p class="queue-modal-note">
                Ini masih tampilan frontend.
                Formulir diagnosis dan pengiriman hasil
                ke admin belum terhubung ke backend.
            </p>

        </div>

        <div class="queue-modal-footer">

            <button type="button"
                    id="queueModalDone">
                Tutup
            </button>

        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const sidebar = document.getElementById('techSidebar');
    const menuToggle = document.getElementById('techMenuToggle');

    const modal = document.getElementById('queueDiagnosisModal');
    const closeButton = document.getElementById('queueModalClose');
    const doneButton = document.getElementById('queueModalDone');

    menuToggle?.addEventListener('click', function () {
        sidebar?.classList.toggle('is-open');
    });

    function closeModal() {
        if (!modal) return;

        modal.hidden = true;
        document.body.classList.remove('modal-open');
    }



    closeButton?.addEventListener('click', closeModal);
    doneButton?.addEventListener('click', closeModal);

    modal?.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });

});
</script>

</body>
</html>