
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laporan & Inventori | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite([
        'resources/css/admin-dashboard.css',
        'resources/css/admin-laporan.css'
    ])

    <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js" defer></script>
</head>

<body>
<div class="admin-layout">

    <!-- SIDEBAR ADMIN -->
    <aside class="sidebar" id="sidebar">

        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
            <span class="brand-logo">N</span>
            <span class="brand-name">NAYLA <em>SERVICE</em></span>
        </a>

        <div class="sidebar-content">
            <p class="sidebar-label">ADMIN CONSOLE</p>

            <nav class="sidebar-nav">

                <a href="{{ route('admin.dashboard') }}" class="nav-item">
                    <i data-lucide="layout-grid" class="nav-icon"></i>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('admin.pesanan') }}" class="nav-item">
                    <i data-lucide="file-text" class="nav-icon"></i>
                    <span>Pesanan</span>
                    <span class="nav-count">5</span>
                </a>

                <a href="{{ route('admin.update-status') }}" class="nav-item">
                    <i data-lucide="refresh-cw" class="nav-icon"></i>
                    <span>Update Status</span>
                </a>

                <a href="{{ route('admin.pelanggan') }}" class="nav-item">
                    <i data-lucide="users-round" class="nav-icon"></i>
                    <span>Pelanggan</span>
                </a>

                <a href="{{ route('admin.laporan') }}"
                   class="nav-item active"
                   aria-current="page">
                    <i data-lucide="chart-no-axes-column" class="nav-icon"></i>
                    <span>Laporan</span>
                </a>

            </nav>
        </div>

        <div class="sidebar-footer">
            <span class="admin-avatar">NA</span>

            <div class="admin-identity">
                <strong>Nayla Admin</strong>
                <span>Administrator</span>
            </div>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <div class="main-area">

        <header class="topbar">
            <div class="topbar-left">

                <button
                    type="button"
                    id="mobileMenuBtn"
                    class="mobile-menu-btn"
                    aria-label="Buka menu"
                    aria-expanded="false"
                >
                    <i data-lucide="menu"></i>
                </button>

                <div>
                    <p class="top-date">SENIN, 18 NOVEMBER 2024</p>
                    <h1>Laporan</h1>
                </div>

            </div>

            <span class="profile-avatar">NA</span>
        </header>

        <main class="reports-page">

            <!-- HEADER LAPORAN -->
            <section class="reports-heading">
                <div>
                    <p class="eyebrow">LAPORAN BISNIS</p>
                    <h2>Laporan & inventori</h2>

                    <p class="reports-description">
                        Ringkasan keuangan dan pergerakan stok secara otomatis.
                    </p>
                </div>

                <!-- KALENDER PERIODE -->
                <div class="laporan-calendar-wrapper" id="laporanCalendarWrapper">

                    <button
                        type="button"
                        class="laporan-calendar-trigger"
                        id="laporanCalendarTrigger"
                        aria-expanded="false"
                        aria-controls="laporanCalendarPopup"
                    >
                        <i data-lucide="calendar-days"></i>

                        <span id="laporanCalendarText">November 2024</span>

                        <i data-lucide="chevron-down"
                           class="laporan-calendar-chevron"></i>
                    </button>

                    <div
                        class="laporan-calendar-popup"
                        id="laporanCalendarPopup"
                        role="dialog"
                        aria-label="Pilih periode laporan"
                        hidden
                    >
                        <div class="laporan-calendar-header">

                            <button
                                type="button"
                                class="laporan-calendar-arrow"
                                id="laporanPrevMonth"
                                aria-label="Bulan sebelumnya"
                            >
                                &#10094;
                            </button>

                            <div class="laporan-calendar-selects">
                                <select id="laporanMonthSelect"
                                        aria-label="Pilih bulan"></select>
                                <select id="laporanYearSelect"
                                        aria-label="Pilih tahun"></select>
                            </div>

                            <button
                                type="button"
                                class="laporan-calendar-arrow"
                                id="laporanNextMonth"
                                aria-label="Bulan berikutnya"
                            >
                                &#10095;
                            </button>

                        </div>

                        <div class="laporan-calendar-weekdays">
                            <span>Min</span>
                            <span>Sen</span>
                            <span>Sel</span>
                            <span>Rab</span>
                            <span>Kam</span>
                            <span>Jum</span>
                            <span>Sab</span>
                        </div>

                        <div class="laporan-calendar-days"
                             id="laporanCalendarDays"></div>

                        <div class="laporan-calendar-footer">
                            <button type="button" id="laporanTodayButton">
                                Bulan Ini
                            </button>
                            <button type="button" id="laporanApplyButton">
                                Terapkan
                            </button>
                        </div>
                    </div>

                    <input
                        type="hidden"
                        id="laporanSelectedPeriod"
                        name="periode"
                        value="2024-11"
                    >
                </div>
            </section>

            <!-- RINGKASAN KEUANGAN -->
            <section class="finance-grid">

                <article class="finance-card">
                    <div class="finance-icon green-icon">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="5" width="18" height="15" rx="2"/>
                            <path d="M16 11h5v5h-5a2.5 2.5 0 0 1 0-5Z"/>
                        </svg>
                    </div>

                    <div class="finance-info">
                        <p>PENDAPATAN</p>
                        <strong id="incomeValue">Rp 2.600.000</strong>
                        <span id="incomeNote">Dari 3 transaksi lunas</span>
                    </div>
                </article>

                <article class="finance-card">
                    <div class="finance-icon gold-icon">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8">
                            <path d="m14 7 3-3a3 3 0 0 0 3 4l-3 3"/>
                            <path d="m14 7-9 9a3 3 0 0 0 4 4l9-9"/>
                        </svg>
                    </div>

                    <div class="finance-info">
                        <p>BIAYA SPAREPART</p>
                        <strong id="costValue">Rp 1.092.000</strong>
                        <span id="costNote">42% dari pendapatan</span>
                    </div>
                </article>

                <article class="finance-card">
                    <div class="finance-icon blue-icon">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8">
                            <rect x="4" y="3" width="16" height="18" rx="2"/>
                            <path d="M8 17v-4M12 17V8M16 17v-6"/>
                        </svg>
                    </div>

                    <div class="finance-info">
                        <p>LABA KOTOR</p>
                        <strong id="profitValue">Rp 1.508.000</strong>
                        <span id="profitNote">Margin 58%</span>
                    </div>
                </article>

            </section>

            <!-- GRAFIK DAN STOK -->
            <section class="reports-middle">

                <article class="chart-card">
                    <div class="card-heading">
                        <div>
                            <h3>Arus pendapatan</h3>
                            <p>7 hari terakhir</p>
                        </div>

                        <span class="growth-badge">● +18,4%</span>
                    </div>

                    <div
                        class="chart-area"
                        id="revenueChart"
                        role="img"
                        aria-label="Grafik pendapatan tujuh hari contoh"
                    ></div>

                    <p class="chart-note">
                        Visualisasi data pendapatan demonstrasi.
                    </p>
                </article>

                <article class="stock-card">

                    <div class="card-heading">
                        <div>
                            <h3>Stok sparepart</h3>
                            <p>Otomatis berkurang setelah pembayaran.</p>
                        </div>

                        <svg class="stock-heading-icon"
                             viewBox="0 0 24 24"
                             fill="none" stroke="currentColor"
                             stroke-width="1.7">
                            <path d="m12 3 9 5-9 5-9-5 9-5Z"/>
                            <path d="M3 8v9l9 5 9-5V8M12 13v9"/>
                        </svg>
                    </div>

                    <div class="stock-list" id="stockList"></div>

                    <p class="stock-note">
                        Stok saat ini merupakan data contoh.
                        Pengurangan stok otomatis membutuhkan integrasi backend.
                    </p>

                </article>
            </section>

            <!-- TRANSAKSI BERHASIL -->
            <section class="transaction-section">

                <div class="transaction-heading">
                    <div>
                        <h3>Transaksi berhasil</h3>
                        <p>Pesanan otomatis masuk setelah pembayaran terverifikasi.</p>
                    </div>

                    <button
                        type="button"
                        class="export-btn"
                        id="exportBtn"
                    >
                        Ekspor laporan
                    </button>
                </div>

                <div class="transaction-table-scroll">
                    <table class="transaction-table">
                        <thead>
                            <tr>
                                <th>ORDER ID</th>
                                <th>PELANGGAN</th>
                                <th>PERANGKAT</th>
                                <th>LAYANAN</th>
                                <th>STATUS</th>
                                <th>PEMBAYARAN</th>
                                <th>TOTAL</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>

                        <tbody id="transactionsBody"></tbody>
                    </table>
                </div>

                <div class="report-footer">
                    Data simulasi frontend, bukan laporan keuangan aktual.
                </div>

            </section>

        </main>
    </div>
</div>

<!-- OVERLAY SIDEBAR -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- MODAL DETAIL -->
<div class="report-modal-overlay" id="detailModal" hidden>
    <div class="report-modal"
         role="dialog"
         aria-modal="true"
         aria-labelledby="modalTitle">

        <div class="report-modal-head">
            <div>
                <p class="eyebrow">DETAIL TRANSAKSI</p>
                <h3 id="modalTitle">Detail transaksi</h3>
            </div>

            <button
                type="button"
                class="modal-close"
                id="closeModal"
                aria-label="Tutup detail"
            >
                ×
            </button>
        </div>

        <div id="modalContent"></div>

        <div class="modal-actions">
            <button
                type="button"
                class="export-btn"
                id="closeModalBottom"
            >
                Tutup
            </button>
        </div>
    </div>
</div>

<div class="toast" id="toast"
     role="status" aria-live="polite"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // ==================================
    // DATA TRANSAKSI DUMMY
    // ==================================

    const transactions = [
        {
            id: 'NS-241107',
            date: '18 Nov 2024',
            customer: 'Rafi Maulana',
            phone: '0813 9876 1122',
            device: 'Samsung S23',
            service: 'Ganti Baterai',
            status: 'Dalam Perbaikan',
            payment: 'Sudah Dibayar',
            total: 850000,
            sparepartCost: 357000
        },
        {
            id: 'NS-241106',
            date: '17 Nov 2024',
            customer: 'Kevin Wijaya',
            phone: '0857 1122 3344',
            device: 'Xiaomi 13T',
            service: 'Perbaikan Charging',
            status: 'Siap Diambil',
            payment: 'Sudah Dibayar',
            total: 650000,
            sparepartCost: 273000
        },
        {
            id: 'NS-241105',
            date: '17 Nov 2024',
            customer: 'Salsa Putri',
            phone: '0812 6677 9900',
            device: 'iPhone 11',
            service: 'Ganti Kamera',
            status: 'Selesai',
            payment: 'Sudah Dibayar',
            total: 1100000,
            sparepartCost: 462000
        }
    ];

    // DATA STOK
    const stocks = [
        {
            name: 'LCD iPhone 13 Pro',
            quantity: 8,
            minimum: 3,
            capacity: 8
        },
        {
            name: 'Baterai Samsung S23',
            quantity: 11,
            minimum: 4,
            capacity: 12
        },
        {
            name: 'Charging Port USB-C',
            quantity: 14,
            minimum: 5,
            capacity: 15
        },
        {
            name: 'Kamera iPhone 11',
            quantity: 5,
            minimum: 2,
            capacity: 6
        }
    ];

    // DATA GRAFIK
    const chartData = [
        { day: 'Sen', value: 30 },
        { day: 'Sel', value: 48 },
        { day: 'Rab', value: 36 },
        { day: 'Kam', value: 59 },
        { day: 'Jum', value: 42 },
        { day: 'Sab', value: 77 },
        { day: 'Min', value: 63 }
    ];

    const formatMoney = number =>
        'Rp ' + Number(number).toLocaleString('id-ID');

    function escapeHtml(value) {
        return String(value).replace(/[&<>"']/g, char => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;'
        }[char]));
    }

    // ==================================
    // RINGKASAN KEUANGAN
    // ==================================

    function renderFinance() {
        const income = transactions.reduce(
            (sum, item) => sum + item.total, 0
        );

        const cost = transactions.reduce(
            (sum, item) => sum + item.sparepartCost, 0
        );

        const profit = income - cost;
        const costRate = income ? Math.round(cost / income * 100) : 0;
        const margin = income ? Math.round(profit / income * 100) : 0;

        document.getElementById('incomeValue').textContent =
            formatMoney(income);

        document.getElementById('incomeNote').textContent =
            `Dari ${transactions.length} transaksi lunas`;

        document.getElementById('costValue').textContent =
            formatMoney(cost);

        document.getElementById('costNote').textContent =
            `${costRate}% dari pendapatan`;

        document.getElementById('profitValue').textContent =
            formatMoney(profit);

        document.getElementById('profitNote').textContent =
            `Margin ${margin}%`;
    }

    // ==================================
    // GRAFIK BATANG
    // ==================================

    function renderChart() {
        const chart = document.getElementById('revenueChart');
        const maxValue = Math.max(...chartData.map(item => item.value));

        chart.innerHTML = chartData.map(item => {
            const percent = item.value / maxValue * 100;

            return `
                <div class="chart-column">
                    <div class="bar-slot">
                        <div
                            class="chart-bar"
                            style="height:${percent}%"
                            title="${item.day}: ${item.value} (indeks demo)"
                        ></div>
                    </div>
                    <span>${item.day}</span>
                </div>
            `;
        }).join('');
    }

    // ==================================
    // STOK SPAREPART
    // ==================================

    function renderStocks() {
        const list = document.getElementById('stockList');

        list.innerHTML = stocks.map(item => {
            const percent = Math.min(
                item.quantity / item.capacity * 100, 100
            );

            return `
                <div class="stock-item">
                    <div class="stock-description">
                        <strong>${escapeHtml(item.name)}</strong>
                        <span>Minimum ${item.minimum} unit</span>
                    </div>

                    <div class="stock-quantity">
                        <div class="stock-track">
                            <div
                                class="stock-fill"
                                style="width:${percent}%"
                            ></div>
                        </div>

                        <span>
                            <strong>${item.quantity}</strong> unit
                        </span>
                    </div>
                </div>
            `;
        }).join('');
    }

    // ==================================
    // TABEL TRANSAKSI
    // ==================================

    const body = document.getElementById('transactionsBody');

    function statusClass(status) {
        return {
            'Dalam Perbaikan': 'info',
            'Siap Diambil': 'purple',
            'Selesai': 'success'
        }[status] || 'neutral';
    }

    function renderTransactions() {
        body.innerHTML = transactions.map(item => `
            <tr>
                <td>
                    <strong class="order-id">
                        #${escapeHtml(item.id)}
                    </strong>
                    <span class="cell-subtext">
                        ${escapeHtml(item.date)}
                    </span>
                </td>

                <td>
                    <strong class="customer-name">
                        ${escapeHtml(item.customer)}
                    </strong>
                    <span class="cell-subtext">
                        ${escapeHtml(item.phone)}
                    </span>
                </td>

                <td>${escapeHtml(item.device)}</td>
                <td>${escapeHtml(item.service)}</td>

                <td>
                    <span class="report-badge ${statusClass(item.status)}">
                        <span class="badge-dot"></span>
                        ${escapeHtml(item.status)}
                    </span>
                </td>

                <td>
                    <span class="report-badge success">
                        <span class="badge-dot"></span>
                        Sudah Dibayar
                    </span>
                </td>

                <td class="total-cell">
                    ${formatMoney(item.total)}
                </td>

                <td>
                    <button
                        type="button"
                        class="detail-btn"
                        data-id="${escapeHtml(item.id)}"
                    >
                        Lihat detail →
                    </button>
                </td>
            </tr>
        `).join('');
    }

    // ==================================
    // MODAL DETAIL
    // ==================================

    const modal = document.getElementById('detailModal');
    const modalContent = document.getElementById('modalContent');

    function closeModal() {
        modal.hidden = true;
        document.body.classList.remove('modal-open');
    }

    body.addEventListener('click', function (event) {
        const button = event.target.closest('.detail-btn');
        if (!button) return;

        const item = transactions.find(
            row => row.id === button.dataset.id
        );

        if (!item) return;

        document.getElementById('modalTitle').textContent =
            '#' + item.id;

        const details = [
            ['Pelanggan', item.customer],
            ['Nomor WhatsApp', item.phone],
            ['Perangkat', item.device],
            ['Layanan', item.service],
            ['Tanggal', item.date],
            ['Status', item.status],
            ['Pembayaran', item.payment],
            ['Total', formatMoney(item.total)],
            ['Biaya sparepart', formatMoney(item.sparepartCost)]
        ];

        modalContent.replaceChildren();

        details.forEach(([label, value]) => {
            const row = document.createElement('div');
            row.className = 'modal-row';

            const left = document.createElement('span');
            left.textContent = label;

            const right = document.createElement('strong');
            right.textContent = value;

            row.append(left, right);
            modalContent.append(row);
        });

        modal.hidden = false;
        document.body.classList.add('modal-open');
        document.getElementById('closeModal').focus();
    });

    document.getElementById('closeModal')
        .addEventListener('click', closeModal);

    document.getElementById('closeModalBottom')
        .addEventListener('click', closeModal);

    modal.addEventListener('click', function (event) {
        if (event.target === modal) closeModal();
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && !modal.hidden) {
            closeModal();
        }
    });

    // ==================================
    // EKSPOR CSV
    // ==================================

    document.getElementById('exportBtn')
        .addEventListener('click', function () {

            const rows = [
                [
                    'Order ID', 'Tanggal', 'Pelanggan',
                    'Perangkat', 'Layanan', 'Status',
                    'Pembayaran', 'Total', 'Biaya Sparepart'
                ],
                ...transactions.map(item => [
                    item.id,
                    item.date,
                    item.customer,
                    item.device,
                    item.service,
                    item.status,
                    item.payment,
                    item.total,
                    item.sparepartCost
                ])
            ];

            function csvCell(value) {
                let text = String(value);

                if (/^[\s]*[=+\-@]/.test(text)) {
                    text = "'" + text;
                }

                return '"' + text.replace(/"/g, '""') + '"';
            }

            const csv = '\uFEFF' + rows
                .map(row => row.map(csvCell).join(','))
                .join('\r\n');

            const blob = new Blob([csv], {
                type: 'text/csv;charset=utf-8;'
            });

            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');

            link.href = url;
            link.download = 'laporan-nayla-service-demo.csv';

            document.body.appendChild(link);
            link.click();
            link.remove();

            URL.revokeObjectURL(url);
        });

    // ==================================
    // SIDEBAR MOBILE
    // ==================================

    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const mobileButton = document.getElementById('mobileMenuBtn');

    function setSidebar(open) {
        sidebar.classList.toggle('open', open);
        overlay.classList.toggle('show', open);

        mobileButton.setAttribute(
            'aria-expanded',
            String(open)
        );
    }

    mobileButton.addEventListener('click', function () {
        setSidebar(!sidebar.classList.contains('open'));
    });

    overlay.addEventListener('click', function () {
        setSidebar(false);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            setSidebar(false);
        }
    });

    // ==================================
    // INISIALISASI
    // ==================================

    renderFinance();
    renderChart();
    renderStocks();
    renderTransactions();

    if (window.lucide) {
        lucide.createIcons();
    }
});
</script>

<!-- KALENDER LAPORAN -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const wrapper = document.getElementById('laporanCalendarWrapper');
    if (!wrapper) return;

    const trigger = document.getElementById('laporanCalendarTrigger');
    const popup = document.getElementById('laporanCalendarPopup');
    const text = document.getElementById('laporanCalendarText');
    const monthSelect = document.getElementById('laporanMonthSelect');
    const yearSelect = document.getElementById('laporanYearSelect');
    const daysContainer = document.getElementById('laporanCalendarDays');
    const prevButton = document.getElementById('laporanPrevMonth');
    const nextButton = document.getElementById('laporanNextMonth');
    const todayButton = document.getElementById('laporanTodayButton');
    const applyButton = document.getElementById('laporanApplyButton');
    const periodInput = document.getElementById('laporanSelectedPeriod');

    const monthNames = [
        'Januari', 'Februari', 'Maret',
        'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September',
        'Oktober', 'November', 'Desember'
    ];

    let selectedDate = new Date(2024, 10, 18);
    let displayedDate = new Date(selectedDate);

    function sameDate(a, b) {
        return (
            a.getFullYear() === b.getFullYear() &&
            a.getMonth() === b.getMonth() &&
            a.getDate() === b.getDate()
        );
    }

    function formatPeriod(date) {
        return (
            date.getFullYear() + '-' +
            String(date.getMonth() + 1).padStart(2, '0')
        );
    }

    function updatePeriodLabel() {
        text.textContent =
            monthNames[selectedDate.getMonth()] +
            ' ' +
            selectedDate.getFullYear();

        periodInput.value = formatPeriod(selectedDate);
    }

    monthNames.forEach((name, index) => {
        const option = document.createElement('option');

        option.value = index;
        option.textContent = name;

        monthSelect.appendChild(option);
    });

    for (let year = 2020; year <= 2100; year++) {
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
        const today = new Date();

        for (let i = 0; i < 42; i++) {
            const date = new Date(
                year,
                month,
                i - firstDay + 1
            );

            const dayButton = document.createElement('button');

            dayButton.type = 'button';
            dayButton.className = 'laporan-calendar-day';
            dayButton.textContent = date.getDate();

            if (date.getMonth() !== month) {
                dayButton.classList.add('is-outside');
            }

            if (sameDate(date, today)) {
                dayButton.classList.add('is-today');
            }

            if (sameDate(date, selectedDate)) {
                dayButton.classList.add('is-selected');
            }

            dayButton.addEventListener('click', () => {
                selectedDate = new Date(date);
                displayedDate = new Date(date);

                renderCalendar();
            });

            daysContainer.appendChild(dayButton);
        }
    }

    function moveMonth(amount) {
        const newDate = new Date(
            displayedDate.getFullYear(),
            displayedDate.getMonth() + amount,
            1
        );

        if (
            newDate.getFullYear() < 2020 ||
            newDate.getFullYear() > 2100
        ) {
            return;
        }

        displayedDate = newDate;

        selectedDate = new Date(
            newDate.getFullYear(),
            newDate.getMonth(),
            1
        );

        renderCalendar();
    }

    prevButton.addEventListener('click', () => {
        moveMonth(-1);
    });

    nextButton.addEventListener('click', () => {
        moveMonth(1);
    });

    monthSelect.addEventListener('change', () => {
        selectedDate = new Date(
            Number(yearSelect.value),
            Number(monthSelect.value),
            1
        );

        displayedDate = new Date(selectedDate);
        renderCalendar();
    });

    yearSelect.addEventListener('change', () => {
        selectedDate = new Date(
            Number(yearSelect.value),
            Number(monthSelect.value),
            1
        );

        displayedDate = new Date(selectedDate);
        renderCalendar();
    });

    todayButton.addEventListener('click', () => {
        const now = new Date();

        selectedDate = new Date(now);
        displayedDate = new Date(now);

        renderCalendar();
    });

    function openCalendar() {
        displayedDate = new Date(selectedDate);
        renderCalendar();

        popup.hidden = false;
        trigger.setAttribute('aria-expanded', 'true');
    }

    function closeCalendar() {
        popup.hidden = true;
        trigger.setAttribute('aria-expanded', 'false');
    }

    trigger.addEventListener('click', () => {
        if (popup.hidden) {
            openCalendar();
        } else {
            closeCalendar();
        }
    });

    applyButton.addEventListener('click', () => {
        updatePeriodLabel();
        closeCalendar();

        document.dispatchEvent(new CustomEvent(
            'laporan:period-changed',
            {
                detail: {
                    period: formatPeriod(selectedDate),
                    month: selectedDate.getMonth() + 1,
                    year: selectedDate.getFullYear()
                }
            }
        ));
    });

    document.addEventListener('click', event => {
        if (!wrapper.contains(event.target)) {
            closeCalendar();
        }
    });

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape') {
            closeCalendar();
        }
    });

    updatePeriodLabel();
    renderCalendar();
});
</script>

</body>
</html>