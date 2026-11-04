
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Riwayat Pekerjaan | Nayla Service</title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    @vite([
        'resources/css/teknisi-dashboard.css',
        'resources/css/teknisi-riwayat.css'
    ])
</head>
<body>

@php
    // Data demo frontend.
    $riwayat = [
        [
            'id' => 'NS-241087',
            'perangkat' => 'Samsung S23',
            'pelanggan' => 'Annisa Putri',
            'layanan' => 'Ganti baterai',
            'tanggal' => '18 Nov 2024',
            'periode' => '2024-11',
            'status' => 'Diterima admin',
            'status_key' => 'accepted',
            'hasil' => 'Komponen utama telah diperiksa. Ditemukan kerusakan pada bagian yang dikeluhkan customer dan direkomendasikan penggantian komponen.',
            'tindakan' => 'Ganti baterai',
            'waktu' => '2–3 hari kerja',
            'sparepart' => 'Rp 850.000',
            'jasa' => 'Rp 200.000',
            'bukti' => 2,
            'timeline' => [
                ['label' => 'Diagnosis dikirim', 'detail' => '18 Nov · 08:42', 'done' => true],
                ['label' => 'Ditinjau admin', 'detail' => '18 Nov · 09:05', 'done' => true],
                ['label' => 'Diteruskan ke customer', 'detail' => 'Menunggu admin', 'done' => false],
            ],
        ],
        [
            'id' => 'NS-241082',
            'perangkat' => 'iPhone 11',
            'pelanggan' => 'Reza Akbar',
            'layanan' => 'Ganti LCD',
            'tanggal' => '17 Nov 2024',
            'periode' => '2024-11',
            'status' => 'Disetujui customer',
            'status_key' => 'approved',
            'hasil' => 'Layar mengalami kerusakan pada panel tampilan. Fungsi perangkat lainnya terdeteksi normal.',
            'tindakan' => 'Penggantian LCD',
            'waktu' => '1–2 hari kerja',
            'sparepart' => 'Rp 650.000',
            'jasa' => 'Rp 150.000',
            'bukti' => 2,
            'timeline' => [
                ['label' => 'Diagnosis dikirim', 'detail' => '17 Nov · 09:10', 'done' => true],
                ['label' => 'Ditinjau admin', 'detail' => '17 Nov · 10:15', 'done' => true],
                ['label' => 'Disetujui customer', 'detail' => '17 Nov · 13:20', 'done' => true],
            ],
        ],
        [
            'id' => 'NS-241074',
            'perangkat' => 'Oppo Reno 10',
            'pelanggan' => 'Maya Lestari',
            'layanan' => 'Perbaikan kamera',
            'tanggal' => '17 Nov 2024',
            'periode' => '2024-11',
            'status' => 'Dalam perbaikan',
            'status_key' => 'repair',
            'hasil' => 'Kamera mengalami gangguan fokus. Pemeriksaan menunjukkan kemungkinan kerusakan pada modul kamera.',
            'tindakan' => 'Penggantian modul kamera',
            'waktu' => '2 hari kerja',
            'sparepart' => 'Rp 400.000',
            'jasa' => 'Rp 150.000',
            'bukti' => 1,
            'timeline' => [
                ['label' => 'Diagnosis dikirim', 'detail' => '17 Nov · 08:30', 'done' => true],
                ['label' => 'Ditinjau admin', 'detail' => '17 Nov · 09:00', 'done' => true],
                ['label' => 'Perbaikan berjalan', 'detail' => '17 Nov · 11:10', 'done' => true],
            ],
        ],
        [
            'id' => 'NS-241061',
            'perangkat' => 'Xiaomi 13T',
            'pelanggan' => 'Dio Pratama',
            'layanan' => 'Charging port',
            'tanggal' => '16 Nov 2024',
            'periode' => '2024-11',
            'status' => 'Selesai',
            'status_key' => 'completed',
            'hasil' => 'Konektor pengisian daya telah diganti. Pengujian pengisian daya berhasil.',
            'tindakan' => 'Penggantian charging port',
            'waktu' => '1 hari kerja',
            'sparepart' => 'Rp 200.000',
            'jasa' => 'Rp 100.000',
            'bukti' => 2,
            'timeline' => [
                ['label' => 'Diagnosis dikirim', 'detail' => '16 Nov · 09:00', 'done' => true],
                ['label' => 'Perbaikan selesai', 'detail' => '16 Nov · 14:00', 'done' => true],
                ['label' => 'Hasil diverifikasi', 'detail' => '16 Nov · 15:10', 'done' => true],
            ],
        ],
        [
            'id' => 'NS-241048',
            'perangkat' => 'iPhone 13',
            'pelanggan' => 'Sarah Nabila',
            'layanan' => 'Diagnosis mati total',
            'tanggal' => '15 Nov 2024',
            'periode' => '2024-11',
            'status' => 'Selesai',
            'status_key' => 'completed',
            'hasil' => 'Perangkat tidak merespons ketika dinyalakan. Pemeriksaan dilakukan pada jalur daya dan komponen mesin.',
            'tindakan' => 'Pemeriksaan jalur daya',
            'waktu' => '3 hari kerja',
            'sparepart' => 'Rp 500.000',
            'jasa' => 'Rp 250.000',
            'bukti' => 1,
            'timeline' => [
                ['label' => 'Diagnosis dikirim', 'detail' => '15 Nov · 08:40', 'done' => true],
                ['label' => 'Perbaikan selesai', 'detail' => '15 Nov · 15:20', 'done' => true],
                ['label' => 'Hasil diverifikasi', 'detail' => '15 Nov · 16:00', 'done' => true],
            ],
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

        <nav class="tech-sidebar-nav" aria-label="Menu teknisi">

            <a href="{{ route('teknisi.dashboard') }}"
               class="tech-nav-item">
                <svg viewBox="0 0 24 24">
                    <rect x="3" y="3" width="7" height="7" rx="1"/>
                    <rect x="14" y="3" width="7" height="7" rx="1"/>
                    <rect x="3" y="14" width="7" height="7" rx="1"/>
                    <rect x="14" y="14" width="7" height="7" rx="1"/>
                </svg>
                <span>Ringkasan</span>
            </a>

            <a href="{{ route('teknisi.antrean') }}"
               class="tech-nav-item">
                <svg viewBox="0 0 24 24">
                    <path d="M7 3h8l4 4v14H7z"/>
                    <path d="M15 3v5h4M10 12h6M10 16h6"/>
                </svg>
                <span>Antrean Saya</span>
                <span class="tech-nav-count">4</span>
            </a>

            <a href="{{ route('teknisi.riwayat') }}"
               class="tech-nav-item active"
               aria-current="page">
                <svg viewBox="0 0 24 24">
                    <rect x="4" y="3" width="16" height="18" rx="2"/>
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
                    <h1>Riwayat Pekerjaan</h1>
                </div>
            </div>

            <div class="tech-topbar-right">
                <span class="tech-duty-status">
                    <span class="tech-duty-dot"></span>
                    Sedang bertugas
                </span>
                <div class="tech-topbar-avatar">RA</div>
            </div>

        </header>

        <main class="tech-content">

            <!-- HEADING -->
            <section class="history-heading">

                <div>
                    <p class="tech-eyebrow">ARSIP PEKERJAAN</p>
                    <h2>Riwayat Pekerjaan</h2>
                    <p class="history-description">
                        Lihat kembali hasil diagnosis yang pernah kamu kirim.
                    </p>
                </div>

                <!-- FILTER -->
                <div class="history-filters">

                    <!-- FILTER STATUS -->
                    <div class="history-select-wrap">
                        <select id="historyStatusFilter"
                                aria-label="Filter status pekerjaan">
                            <option value="all">Semua status</option>
                            <option value="accepted">Diterima admin</option>
                            <option value="approved">Disetujui customer</option>
                            <option value="repair">Dalam perbaikan</option>
                            <option value="completed">Selesai</option>
                        </select>

                        <svg class="history-filter-chevron"
                             viewBox="0 0 24 24">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </div>

                    <!-- KALENDER -->
                    <div class="history-calendar-wrap"
                         id="historyCalendarWrap">

                        <button type="button"
                                class="history-calendar-trigger"
                                id="historyCalendarTrigger"
                                aria-expanded="false"
                                aria-controls="historyCalendarPopup">

                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18"
                                      height="16" rx="2"/>
                                <path d="M7 3v4M17 3v4M3 10h18"/>
                            </svg>

                            <span id="historyCalendarLabel">
                                November 2024
                            </span>

                            <svg class="history-trigger-chevron"
                                 viewBox="0 0 24 24">
                                <path d="m6 9 6 6 6-6"/>
                            </svg>
                        </button>

                        <div class="history-calendar-popup"
                             id="historyCalendarPopup"
                             role="dialog"
                             aria-label="Pilih periode riwayat pekerjaan"
                             hidden>

                            <div class="history-calendar-header">

                                <button type="button"
                                        class="history-calendar-arrow"
                                        id="historyPrevMonth"
                                        aria-label="Bulan sebelumnya">
                                    &#10094;
                                </button>

                                <div class="history-calendar-selects">
                                    <select id="historyMonthSelect"
                                            aria-label="Pilih bulan"></select>

                                    <select id="historyYearSelect"
                                            aria-label="Pilih tahun"></select>
                                </div>

                                <button type="button"
                                        class="history-calendar-arrow"
                                        id="historyNextMonth"
                                        aria-label="Bulan berikutnya">
                                    &#10095;
                                </button>

                            </div>

                            <div class="history-calendar-weekdays">
                                <span>Min</span>
                                <span>Sen</span>
                                <span>Sel</span>
                                <span>Rab</span>
                                <span>Kam</span>
                                <span>Jum</span>
                                <span>Sab</span>
                            </div>

                            <div class="history-calendar-days"
                                 id="historyCalendarDays"></div>

                            <div class="history-calendar-footer">

                                <button type="button"
                                        class="history-clear-period"
                                        id="historyClearPeriod">
                                    Semua bulan
                                </button>

                                <button type="button"
                                        class="history-apply-period"
                                        id="historyApplyPeriod">
                                    Terapkan
                                </button>
                            </div>
                        </div>

                        <input type="hidden"
                               id="historyMonthFilter"
                               value="2024-11">
                    </div>

                </div>
            </section>

            <!-- LIST + DETAIL -->
            <div class="history-layout">

                <!-- DAFTAR RIWAYAT -->
                <section class="history-panel history-list-panel">

                    <div class="history-list-heading">
                        <span>PEKERJAAN TERBARU</span>
                        <span id="historyTotalLabel">
                            5 pekerjaan ditampilkan
                        </span>
                    </div>

                    <div class="history-list" id="historyList">

                        @foreach($riwayat as $index => $item)
                            <button type="button"
                                    class="history-item {{ $index === 0 ? 'is-active' : '' }}"
                                    data-index="{{ $index }}"
                                    data-status="{{ $item['status_key'] }}"
                                    data-month="{{ $item['periode'] }}"
                                    aria-pressed="{{ $index === 0 ? 'true' : 'false' }}">

                                <span class="history-item-icon">
                                    <svg viewBox="0 0 24 24">
                                        <rect x="7" y="2" width="10"
                                              height="20" rx="2"/>
                                        <path d="M11 18h2"/>
                                    </svg>
                                </span>

                                <span class="history-item-main">
                                    <small>#{{ $item['id'] }}</small>
                                    <strong>{{ $item['perangkat'] }}</strong>
                                    <span>
                                        {{ $item['pelanggan'] }} ·
                                        {{ $item['layanan'] }}
                                    </span>
                                </span>

                                <span class="history-item-meta">
                                    <small>{{ $item['tanggal'] }}</small>
                                    <span class="history-item-status status-{{ $item['status_key'] }}">
                                        {{ $item['status'] }}
                                    </span>
                                </span>

                                <!-- OPSI NOMOR 4: PANAH KE KIRI -->
                                <svg class="history-item-chevron"
                                     viewBox="0 0 24 24">
                                    <path d="m15 18-6-6 6-6"/>
                                </svg>

                            </button>
                        @endforeach

                        <p class="history-empty"
                           id="historyEmpty"
                           hidden>
                            Tidak ada pekerjaan untuk filter ini.
                        </p>
                    </div>
                </section>

                <!-- DETAIL -->
                <section class="history-panel history-detail-panel"
                         id="historyDetailPanel">

                    <div class="history-detail-top">

                        <div>
                            <p class="tech-eyebrow">DETAIL DIAGNOSIS</p>
                            <h3 id="detailDevice">Samsung S23</h3>
                            <p id="detailOrder">
                                #NS-241087 · Annisa Putri
                            </p>
                        </div>

                        <span class="history-detail-badge status-accepted"
                              id="detailStatus">
                            ✓ Diterima admin
                        </span>
                    </div>

                    <div class="history-diagnosis">
                        <p class="history-detail-label">
                            HASIL PEMERIKSAAN
                        </p>
                        <p id="detailResult"></p>
                    </div>

                    <div class="history-detail-grid">

                        <div>
                            <span>TINDAKAN</span>
                            <strong id="detailAction"></strong>
                        </div>

                        <div>
                            <span>WAKTU PENGERJAAN</span>
                            <strong id="detailDuration"></strong>
                        </div>

                        <div>
                            <span>ESTIMASI SPAREPART</span>
                            <strong id="detailSparepart"></strong>
                        </div>

                        <div>
                            <span>ESTIMASI JASA</span>
                            <strong id="detailService"></strong>
                        </div>
                    </div>

                    <div class="history-evidence">

                        <span class="history-evidence-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="7" y="2" width="10"
                                      height="20" rx="2"/>
                                <path d="M11 18h2"/>
                            </svg>
                        </span>

                        <div class="history-evidence-copy">
                            <strong>Bukti pemeriksaan</strong>
                            <span id="detailEvidenceCount"></span>
                        </div>

                        <button type="button"
                                class="history-evidence-button"
                                id="viewEvidenceButton">

                            <svg viewBox="0 0 24 24">
                                <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z"/>
                                <circle cx="12" cy="12" r="2.5"/>
                            </svg>
                            Lihat
                        </button>

                    </div>

                    <div class="history-timeline"
                         id="historyTimeline"></div>

                </section>

            </div>
        </main>
    </div>
</div>

<!-- MODAL BUKTI -->
<div class="history-modal-backdrop"
     id="evidenceModal"
     hidden>

    <div class="history-modal"
         role="dialog"
         aria-modal="true"
         aria-labelledby="evidenceModalTitle">

        <div class="history-modal-header">
            <h3 id="evidenceModalTitle">Bukti Pemeriksaan</h3>

            <button type="button"
                    id="closeEvidenceModal"
                    aria-label="Tutup">
                ×
            </button>
        </div>

        <div class="history-modal-body">

            <p id="evidenceModalOrder"></p>

            <div class="history-evidence-placeholder">
                <svg viewBox="0 0 24 24">
                    <rect x="3" y="3" width="18"
                          height="18" rx="2"/>
                    <circle cx="8" cy="8" r="1.5"/>
                    <path d="m21 16-5-5L5 21"/>
                </svg>

                <strong>Pratinjau bukti belum tersedia</strong>

                <span>
                    Jumlah foto masih merupakan data demo.
                    Foto sebenarnya akan ditampilkan setelah
                    terhubung dengan penyimpanan backend.
                </span>
            </div>
        </div>

        <div class="history-modal-footer">
            <button type="button" id="doneEvidenceModal">
                Tutup
            </button>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // =====================================
    // DATA RIWAYAT
    // =====================================

    const historyData = @json($riwayat);

    const items = Array.from(
        document.querySelectorAll('.history-item')
    );

    const statusFilter =
        document.getElementById('historyStatusFilter');

    const monthFilter =
        document.getElementById('historyMonthFilter');

    const totalLabel =
        document.getElementById('historyTotalLabel');

    const emptyMessage =
        document.getElementById('historyEmpty');

    const detailPanel =
        document.getElementById('historyDetailPanel');

    let activeIndex = 0;

    function escapeHTML(value) {
        return String(value)
            .replaceAll('&', '&amp;')
            .replaceAll('<', '&lt;')
            .replaceAll('>', '&gt;')
            .replaceAll('"', '&quot;')
            .replaceAll("'", '&#39;');
    }

    function selectHistory(index) {

        const item = historyData[index];

        if (!item) return;

        activeIndex = index;

        items.forEach(button => {
            const selected =
                Number(button.dataset.index) === index;

            button.classList.toggle('is-active', selected);

            button.setAttribute(
                'aria-pressed',
                selected ? 'true' : 'false'
            );
        });

        document.getElementById('detailDevice').textContent =
            item.perangkat;

        document.getElementById('detailOrder').textContent =
            '#' + item.id + ' · ' + item.pelanggan;

        const detailStatus =
            document.getElementById('detailStatus');

        detailStatus.className =
            'history-detail-badge status-' + item.status_key;

        detailStatus.textContent =
            (['accepted', 'completed'].includes(item.status_key)
                ? '✓ ' : '') + item.status;

        document.getElementById('detailResult').textContent =
            item.hasil;

        document.getElementById('detailAction').textContent =
            item.tindakan;

        document.getElementById('detailDuration').textContent =
            item.waktu;

        document.getElementById('detailSparepart').textContent =
            item.sparepart;

        document.getElementById('detailService').textContent =
            item.jasa;

        document.getElementById('detailEvidenceCount').textContent =
            item.bukti + ' foto terlampir (demo)';

        document.getElementById('historyTimeline').innerHTML =
            item.timeline.map(step => `
                <div class="history-timeline-item
                     ${step.done ? 'is-done' : ''}">

                    <span class="history-timeline-dot"></span>

                    <div>
                        <strong>${escapeHTML(step.label)}</strong>
                        <small>${escapeHTML(step.detail)}</small>
                    </div>
                </div>
            `).join('');
    }

    function applyFilters() {

        const status = statusFilter.value;
        const month = monthFilter.value;

        const visibleItems = items.filter(button => {

            const matchesStatus =
                status === 'all' ||
                button.dataset.status === status;

            const matchesMonth =
                month === 'all' ||
                button.dataset.month === month;

            const visible = matchesStatus && matchesMonth;

            button.hidden = !visible;

            return visible;
        });

        totalLabel.textContent =
            visibleItems.length + ' pekerjaan ditampilkan';

        emptyMessage.hidden = visibleItems.length > 0;

        detailPanel.hidden = visibleItems.length === 0;

        const activeVisible = visibleItems.some(button =>
            Number(button.dataset.index) === activeIndex
        );

        if (!activeVisible && visibleItems.length) {
            selectHistory(
                Number(visibleItems[0].dataset.index)
            );
        }
    }

    items.forEach(button => {

        button.addEventListener('click', function () {
            selectHistory(Number(this.dataset.index));
        });
    });

    statusFilter.addEventListener('change', applyFilters);

    // =====================================
    // KALENDER CUSTOM
    // =====================================

    const calendarWrap =
        document.getElementById('historyCalendarWrap');

    const calendarTrigger =
        document.getElementById('historyCalendarTrigger');

    const calendarPopup =
        document.getElementById('historyCalendarPopup');

    const calendarLabel =
        document.getElementById('historyCalendarLabel');

    const monthSelect =
        document.getElementById('historyMonthSelect');

    const yearSelect =
        document.getElementById('historyYearSelect');

    const daysContainer =
        document.getElementById('historyCalendarDays');

    const monthNames = [
        'Januari', 'Februari', 'Maret',
        'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September',
        'Oktober', 'November', 'Desember'
    ];

    const MIN_YEAR = 2020;
    const MAX_YEAR = 2100;

    let displayedDate = new Date(2024, 10, 1);
    let selectedDate = new Date(2024, 10, 18);

    function periodOf(date) {
        return date.getFullYear() + '-' +
            String(date.getMonth() + 1).padStart(2, '0');
    }

    function updateCalendarLabel() {
        const period = monthFilter.value;

        if (period === 'all') {
            calendarLabel.textContent = 'Semua bulan';
            return;
        }

        const [year, month] = period.split('-').map(Number);

        calendarLabel.textContent =
            monthNames[month - 1] + ' ' + year;
    }

    monthNames.forEach((name, index) => {
        const option = document.createElement('option');
        option.value = index;
        option.textContent = name;
        monthSelect.appendChild(option);
    });

    for (let year = MIN_YEAR; year <= MAX_YEAR; year++) {
        const option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
    }

    function renderCalendar() {

        const year = displayedDate.getFullYear();
        const month = displayedDate.getMonth();

        monthSelect.value = month;
        yearSelect.value = year;

        daysContainer.innerHTML = '';

        const firstDay = new Date(year, month, 1).getDay();

        // 42 sel agar susunan kalender stabil.
        for (let i = 0; i < 42; i++) {

            const date = new Date(
                year,
                month,
                i - firstDay + 1
            );

            const button = document.createElement('button');

            button.type = 'button';
            button.className = 'history-calendar-day';
            button.textContent = date.getDate();

            if (date.getMonth() !== month) {
                button.classList.add('is-outside');
            }

            if (date.getFullYear() === selectedDate.getFullYear() &&
                date.getMonth() === selectedDate.getMonth() &&
                date.getDate() === selectedDate.getDate()) {
                button.classList.add('is-selected');
            }

            button.addEventListener('click', () => {
                selectedDate = new Date(date);
                displayedDate = new Date(
                    date.getFullYear(),
                    date.getMonth(),
                    1
                );
                renderCalendar();
            });

            daysContainer.appendChild(button);
        }
    }

    function shiftMonth(amount) {

        const nextDate = new Date(
            displayedDate.getFullYear(),
            displayedDate.getMonth() + amount,
            1
        );

        if (nextDate.getFullYear() < MIN_YEAR ||
            nextDate.getFullYear() > MAX_YEAR) {
            return;
        }

        displayedDate = nextDate;

        selectedDate = new Date(
            nextDate.getFullYear(),
            nextDate.getMonth(),
            1
        );

        renderCalendar();
    }

    document.getElementById('historyPrevMonth')
        .addEventListener('click', () => shiftMonth(-1));

    document.getElementById('historyNextMonth')
        .addEventListener('click', () => shiftMonth(1));

    function syncSelects() {

        selectedDate = new Date(
            Number(yearSelect.value),
            Number(monthSelect.value),
            1
        );

        displayedDate = new Date(selectedDate);

        renderCalendar();
    }

    monthSelect.addEventListener('change', syncSelects);
    yearSelect.addEventListener('change', syncSelects);

    function closeCalendar() {
        calendarPopup.hidden = true;
        calendarTrigger.setAttribute('aria-expanded', 'false');
    }

    calendarTrigger.addEventListener('click', function () {

        if (calendarPopup.hidden) {
            renderCalendar();
            calendarPopup.hidden = false;
            calendarTrigger.setAttribute('aria-expanded', 'true');
        } else {
            closeCalendar();
        }
    });

    document.getElementById('historyApplyPeriod')
        .addEventListener('click', function () {

            monthFilter.value = periodOf(selectedDate);

            updateCalendarLabel();
            applyFilters();
            closeCalendar();
        });

    document.getElementById('historyClearPeriod')
        .addEventListener('click', function () {

            monthFilter.value = 'all';

            updateCalendarLabel();
            applyFilters();
            closeCalendar();
        });

    document.addEventListener('click', function (event) {

        if (!calendarWrap.contains(event.target)) {
            closeCalendar();
        }
    });

    // =====================================
    // MODAL BUKTI
    // =====================================

    const modal = document.getElementById('evidenceModal');

    const closeModalButton =
        document.getElementById('closeEvidenceModal');

    function closeModal() {
        modal.hidden = true;
        document.body.classList.remove('history-modal-open');
    }

    document.getElementById('viewEvidenceButton')
        .addEventListener('click', function () {

            const item = historyData[activeIndex];

            document.getElementById('evidenceModalOrder').textContent =
                '#' + item.id + ' · ' + item.perangkat;

            modal.hidden = false;

            document.body.classList.add('history-modal-open');

            closeModalButton.focus();
        });

    closeModalButton.addEventListener('click', closeModal);

    document.getElementById('doneEvidenceModal')
        .addEventListener('click', closeModal);

    modal.addEventListener('click', event => {
        if (event.target === modal) closeModal();
    });

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape') {
            closeCalendar();

            if (!modal.hidden) closeModal();
        }
    });

    // =====================================
    // SIDEBAR MOBILE
    // =====================================

    const sidebar =
        document.getElementById('techSidebar');

    document.getElementById('techMenuToggle')
        ?.addEventListener('click', () => {
            sidebar?.classList.toggle('is-open');
        });

    selectHistory(0);
    updateCalendarLabel();
    applyFilters();

});
</script>

</body>
</html>