
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite('resources/css/admin-dashboard.css')

    <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js" defer></script>
</head>

<body>

<div class="admin-layout">

    <!-- =====================================
         SIDEBAR ADMIN
    ====================================== -->
    <aside class="sidebar" id="sidebar">

        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand brand">
            <span class="brand-logo brand-icon">N</span>
            <span class="brand-name">
                NAYLA <em>SERVICE</em>
            </span>
        </a>

        <div class="sidebar-content">

            <p class="sidebar-label sidebar-caption">
                ADMIN CONSOLE
            </p>

            <nav class="sidebar-nav">

                <a href="{{ route('admin.dashboard') }}"
                   class="nav-item active"
                   aria-current="page">
                    <i data-lucide="layout-grid" class="nav-icon"></i>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('admin.pesanan') }}"
                   class="nav-item">
                    <i data-lucide="file-text" class="nav-icon"></i>
                    <span>Pesanan</span>
                    <span class="nav-count menu-count" id="sidebarCount">5</span>
                </a>

                <a href="{{ route('admin.update-status') }}"
                   class="nav-item">
                    <i data-lucide="refresh-cw" class="nav-icon"></i>
                    <span>Update Status</span>
                </a>

                <a href="{{ route('admin.pelanggan') }}"
                   class="nav-item">
                    <i data-lucide="users-round" class="nav-icon"></i>
                    <span>Pelanggan</span>
                </a>

                <a href="{{ route('admin.laporan') }}"
                   class="nav-item">
                    <i data-lucide="chart-no-axes-column" class="nav-icon"></i>
                    <span>Laporan</span>
                </a>

            </nav>
        </div>

        <div class="sidebar-footer sidebar-profile">

            <span class="admin-avatar avatar">NA</span>

            <div class="admin-identity">
                <strong>Nayla Admin</strong>
                <span>Administrator</span>
            </div>

        </div>

    </aside>

    <!-- =====================================
         HALAMAN UTAMA
    ====================================== -->
    <div class="main-area">

        <!-- TOPBAR -->
        <header class="topbar">

            <div class="topbar-left">

                <button
                    type="button"
                    id="mobileMenuBtn"
                    class="mobile-menu-btn"
                    aria-label="Buka navigasi"
                    aria-expanded="false"
                >
                    <i data-lucide="menu"></i>
                </button>

                <div>
                    <p class="top-date" id="topDate">
                        SENIN, 18 NOVEMBER 2024
                    </p>
                    <h1>Dashboard</h1>
                </div>
            </div>

            <span class="profile-avatar">NA</span>

        </header>

        <!-- =====================================
             KONTEN DASHBOARD
        ====================================== -->
        <main class="dashboard-content">

            <!-- SELAMAT DATANG -->
            <section class="welcome-section">

                <div class="welcome-text">

                    <p class="eyebrow">
                        RINGKASAN HARI INI
                    </p>

                    <h2>
                        Selamat pagi, Nayla.
                    </h2>

                    <p class="subtitle">
                        Pantau operasional service dari satu tempat.
                    </p>

                </div>

                <!-- KALENDER UTAMA -->
                <div class="dashboard-date">

                    <div class="nayla-calendar">

                        <button
                            type="button"
                            id="mainDateButton"
                            class="nayla-calendar-trigger"
                            aria-label="Pilih tanggal Dashboard"
                            aria-expanded="false"
                            aria-controls="mainCalendarPopup"
                        >

                            <i data-lucide="calendar-days"
                               class="calendar-main-icon"></i>

                            <span id="mainDateText">
                                18 November 2024
                            </span>

                            <i data-lucide="chevron-down"
                               class="calendar-chevron"></i>

                        </button>

                        <div
                            id="mainCalendarPopup"
                            class="nayla-calendar-popup"
                            aria-label="Kalender Dashboard"
                            hidden
                        ></div>

                    </div>

                </div>

            </section>

            <!-- =====================================
                 KARTU STATISTIK
            ====================================== -->
            <section class="stats-grid">

                <article class="stat-card">

                    <span class="stat-icon gold-icon">
                        <i data-lucide="clipboard-list"></i>
                    </span>

                    <p>Pesanan Masuk</p>

                    <strong id="totalOrders">5</strong>

                    <small>Jumlah seluruh pesanan demo</small>

                </article>

                <article class="stat-card">

                    <span class="stat-icon amber-icon">
                        <i data-lucide="clock-3"></i>
                    </span>

                    <p>Perlu Validasi</p>

                    <strong id="validationCount">1</strong>

                    <small>Menunggu pemeriksaan</small>

                </article>

                <article class="stat-card">

                    <span class="stat-icon blue-icon">
                        <i data-lucide="wrench"></i>
                    </span>

                    <p>Dalam Perbaikan</p>

                    <strong id="repairCount">1</strong>

                    <small>Sedang dikerjakan</small>

                </article>

                <article class="stat-card">

                    <span class="stat-icon purple-icon">
                        <i data-lucide="package-check"></i>
                    </span>

                    <p>Siap Diambil</p>

                    <strong id="pickupCount">1</strong>

                    <small>Siap diserahkan</small>

                </article>

                <article class="stat-card">

                    <span class="stat-icon green-icon">
                        <i data-lucide="check-circle-2"></i>
                    </span>

                    <p>Selesai</p>

                    <strong id="completedCount">1</strong>

                    <small>Service selesai</small>

                </article>

                <article class="stat-card">

                    <span class="stat-icon red-icon">
                        <i data-lucide="x-circle"></i>
                    </span>

                    <p>Dibatalkan</p>

                    <strong id="cancelledCount">1</strong>

                    <small>Tidak dilanjutkan</small>

                </article>

            </section>

            <!-- =====================================
                 PEMASUKAN
            ====================================== -->
            <section class="revenue-card">

                <div class="revenue-left">

                    <span class="revenue-icon">
                        <i data-lucide="wallet"></i>
                    </span>

                    <div>

                        <p>PEMASUKAN TERVERIFIKASI</p>

                        <strong id="revenueValue">
                            Rp 2.600.000
                        </strong>

                        <small>
                            Total dari pesanan contoh
                            yang sudah dibayar.
                        </small>

                    </div>

                </div>

                <div class="revenue-bars" aria-hidden="true">
                    <span style="height:30%"></span>
                    <span style="height:50%"></span>
                    <span style="height:38%"></span>
                    <span style="height:67%"></span>
                    <span style="height:54%"></span>
                    <span style="height:88%"></span>
                    <span style="height:73%"></span>
                </div>

            </section>

            <!-- =====================================
                 PESANAN TERBARU
            ====================================== -->
            <section class="orders-section" id="ordersSection">

                <div class="orders-heading">

                    <div>
                        <h2>Pesanan terbaru</h2>
                        <p>
                            Kelola dan pantau pesanan service terkini.
                        </p>
                    </div>

                    <button
                        type="button"
                        id="seeAllBtn"
                        class="outline-btn"
                    >
                        Lihat semua
                        <i data-lucide="arrow-right"></i>
                    </button>

                </div>

                <div class="orders-card">

                    <!-- SEARCH DAN FILTER -->
                    <div class="filters-bar">

                        <div class="search-wrapper">

                            <span class="search-symbol">
                                <i data-lucide="search"></i>
                            </span>

                            <input
                                type="search"
                                id="searchInput"
                                placeholder="Cari pesanan, pelanggan, atau perangkat..."
                                aria-label="Cari pesanan"
                            >

                        </div>

                        <select
                            id="statusFilter"
                            aria-label="Filter status"
                        >
                            <option value="all">
                                Semua Status
                            </option>

                            <option value="Perlu Validasi">
                                Perlu Validasi
                            </option>

                            <option value="Dalam Perbaikan">
                                Dalam Perbaikan
                            </option>

                            <option value="Siap Diambil">
                                Siap Diambil
                            </option>

                            <option value="Selesai">
                                Selesai
                            </option>

                            <option value="Dibatalkan">
                                Dibatalkan
                            </option>
                        </select>

                        <select
                            id="paymentFilter"
                            aria-label="Filter pembayaran"
                        >
                            <option value="all">
                                Semua Pembayaran
                            </option>

                            <option value="Belum Dibayar">
                                Belum Dibayar
                            </option>

                            <option value="Sudah Dibayar">
                                Sudah Dibayar
                            </option>

                            <option value="Dibatalkan">
                                Dibatalkan
                            </option>
                        </select>

                        <!-- FILTER KALENDER -->
                        <div class="nayla-calendar table-date">

                            <button
                                type="button"
                                id="filterDateButton"
                                class="nayla-calendar-trigger"
                                aria-label="Filter berdasarkan tanggal"
                                aria-expanded="false"
                                aria-controls="filterCalendarPopup"
                            >

                                <i data-lucide="calendar-days"></i>

                                <span id="filterDateText">
                                    Semua Tanggal
                                </span>

                                <i data-lucide="chevron-down"
                                   class="calendar-chevron"></i>

                            </button>

                            <div
                                id="filterCalendarPopup"
                                class="nayla-calendar-popup"
                                aria-label="Kalender filter pesanan"
                                hidden
                            ></div>

                        </div>

                        <button
                            type="button"
                            id="resetFilters"
                            class="filter-btn"
                        >
                            <i data-lucide="list-filter"></i>
                            Reset
                        </button>

                    </div>

                    <!-- TABEL PESANAN -->
                    <div class="table-scroll">

                        <table class="orders-table">

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

                            <tbody id="ordersTableBody"></tbody>

                        </table>

                    </div>

                    <div
                        id="emptyState"
                        class="empty-state"
                        hidden
                    >
                        Tidak ada pesanan yang sesuai dengan filter.
                    </div>

                    <div class="table-bottom">

                        <span id="resultCount">
                            Menampilkan 5 pesanan
                        </span>

                        <span class="demo-indicator">
                            Data demonstrasi frontend
                        </span>

                    </div>

                </div>

            </section>

        </main>

    </div>

</div>

<!-- =====================================
     OVERLAY SIDEBAR MOBILE
====================================== -->
<div
    id="sidebarOverlay"
    class="sidebar-overlay"
></div>

<!-- =====================================
     MODAL DETAIL PESANAN
====================================== -->
<div
    id="detailModal"
    class="modal-backdrop"
    hidden
>

    <div
        class="detail-modal"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modalTitle"
    >

        <div class="modal-header">

            <div>
                <p class="eyebrow">DETAIL PESANAN</p>
                <h2 id="modalTitle">Detail Pesanan</h2>
            </div>

            <button
                type="button"
                class="modal-close"
                id="closeModal"
                aria-label="Tutup detail"
            >
                <i data-lucide="x"></i>
            </button>

        </div>

        <div class="modal-body" id="modalBody"></div>

        <div class="modal-footer">

            <button
                type="button"
                class="outline-btn"
                id="closeModalBottom"
            >
                Tutup
            </button>

        </div>

    </div>

</div>

<div
    id="toast"
    class="toast"
    role="status"
    aria-live="polite"
></div>

<!-- =====================================
     JAVASCRIPT DASHBOARD
====================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const get = id => document.getElementById(id);

    // ======================================
    // DATA DEMONSTRASI
    // ======================================

    const orders = [
        {
            id: 'NS-241108',
            date: '2024-11-18',
            customer: 'Dinda Aulia',
            phone: '0812 3456 8890',
            device: 'iPhone 13 Pro',
            service: 'Ganti Layar',
            status: 'Perlu Validasi',
            payment: 'Belum Dibayar',
            total: 1250000
        },
        {
            id: 'NS-241107',
            date: '2024-11-18',
            customer: 'Rafi Maulana',
            phone: '0813 9876 1122',
            device: 'Samsung S23',
            service: 'Ganti Baterai',
            status: 'Dalam Perbaikan',
            payment: 'Sudah Dibayar',
            total: 850000
        },
        {
            id: 'NS-241106',
            date: '2024-11-17',
            customer: 'Kevin Wijaya',
            phone: '0857 1122 3344',
            device: 'Xiaomi 13T',
            service: 'Perbaikan Charging',
            status: 'Siap Diambil',
            payment: 'Sudah Dibayar',
            total: 650000
        },
        {
            id: 'NS-241105',
            date: '2024-11-17',
            customer: 'Salsa Putri',
            phone: '0812 6677 9900',
            device: 'iPhone 11',
            service: 'Ganti Kamera',
            status: 'Selesai',
            payment: 'Sudah Dibayar',
            total: 1100000
        },
        {
            id: 'NS-241104',
            date: '2024-11-16',
            customer: 'Arga Pratama',
            phone: '0819 2233 4455',
            device: 'Oppo Reno 10',
            service: 'Ganti Layar',
            status: 'Dibatalkan',
            payment: 'Dibatalkan',
            total: 0
        }
    ];

    const MONTHS = [
        'Januari', 'Februari', 'Maret', 'April',
        'Mei', 'Juni', 'Juli', 'Agustus',
        'September', 'Oktober', 'November', 'Desember'
    ];

    const WEEKDAYS = [
        'Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'
    ];

    function formatMoney(value) {
        return 'Rp ' + Number(value).toLocaleString('id-ID');
    }

    function escapeHtml(value) {
        return String(value).replace(/[&<>"']/g, char => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;'
        }[char]));
    }

    function toISO(year, monthIndex, day) {
        return [
            year,
            String(monthIndex + 1).padStart(2, '0'),
            String(day).padStart(2, '0')
        ].join('-');
    }

    function formatLongDate(iso) {
        if (!iso) return '';

        const [year, month, day] = iso.split('-').map(Number);

        return `${day} ${MONTHS[month - 1]} ${year}`;
    }

    function todayISO() {
        const date = new Date();

        return toISO(
            date.getFullYear(),
            date.getMonth(),
            date.getDate()
        );
    }

    // ======================================
    // KALENDER
    // ======================================

    let selectedFilterDate = null;

    const calendarControllers = [];

    function createCalendar(
        buttonId,
        popupId,
        initialDate,
        onSelect,
        allowClear = false
    ) {
        const button = get(buttonId);
        const popup = get(popupId);

        let selectedDate = initialDate;

        let [viewYear, viewMonth] =
            initialDate.split('-').map(Number);

        viewMonth -= 1;

        function close() {
            popup.hidden = true;
            button.setAttribute('aria-expanded', 'false');
        }

        function render() {
            const firstDay =
                new Date(viewYear, viewMonth, 1).getDay();

            const daysInMonth =
                new Date(viewYear, viewMonth + 1, 0).getDate();

            const cells = [];

            for (let offset = firstDay - 1; offset >= 0; offset--) {
                const date =
                    new Date(viewYear, viewMonth, -offset);

                cells.push({
                    iso: toISO(
                        date.getFullYear(),
                        date.getMonth(),
                        date.getDate()
                    ),
                    day: date.getDate(),
                    outside: true
                });
            }

            for (let day = 1; day <= daysInMonth; day++) {
                cells.push({
                    iso: toISO(viewYear, viewMonth, day),
                    day,
                    outside: false
                });
            }

            let nextDay = 1;

            while (cells.length < 42) {
                const date = new Date(
                    viewYear,
                    viewMonth + 1,
                    nextDay++
                );

                cells.push({
                    iso: toISO(
                        date.getFullYear(),
                        date.getMonth(),
                        date.getDate()
                    ),
                    day: date.getDate(),
                    outside: true
                });
            }

            const years = [];

            for (let year = 1900; year <= 2100; year++) {
                years.push(year);
            }

            popup.innerHTML = `
                <div class="calendar-month-header">

                    <button
                        type="button"
                        class="calendar-nav"
                        data-prev
                        aria-label="Bulan sebelumnya"
                    >‹</button>

                    <div class="calendar-title-controls">

                        <select
                            class="calendar-month-select"
                            aria-label="Pilih bulan"
                        >
                            ${MONTHS.map((name, index) => `
                                <option
                                    value="${index}"
                                    ${index === viewMonth ? 'selected' : ''}
                                >
                                    ${name}
                                </option>
                            `).join('')}
                        </select>

                        <select
                            class="calendar-year-select"
                            aria-label="Pilih tahun"
                        >
                            ${years.map(year => `
                                <option
                                    value="${year}"
                                    ${year === viewYear ? 'selected' : ''}
                                >
                                    ${year}
                                </option>
                            `).join('')}
                        </select>

                    </div>

                    <button
                        type="button"
                        class="calendar-nav"
                        data-next
                        aria-label="Bulan berikutnya"
                    >›</button>

                </div>

                <div class="calendar-days-grid">

                    ${WEEKDAYS.map(day => `
                        <span class="calendar-weekday">
                            ${day}
                        </span>
                    `).join('')}

                    ${cells.map(cell => `
                        <button
                            type="button"
                            class="calendar-day-button
                                ${cell.outside ? 'other-month' : ''}
                                ${cell.iso === selectedDate
                                    ? 'selected' : ''}"
                            data-date="${cell.iso}"
                            aria-label="${formatLongDate(cell.iso)}"
                            aria-pressed="${cell.iso === selectedDate}"
                        >
                            ${cell.day}
                        </button>
                    `).join('')}

                </div>

                <div class="calendar-popup-footer">

                    <button type="button" data-today>
                        Hari ini
                    </button>

                    ${allowClear ? `
                        <button type="button" data-clear>
                            Semua tanggal
                        </button>
                    ` : ''}

                </div>
            `;
        }

        function choose(iso) {
            selectedDate = iso;

            const [year, month] = iso.split('-').map(Number);

            viewYear = year;
            viewMonth = month - 1;

            onSelect(iso);
            close();
        }

        button.addEventListener('click', function (event) {
            event.stopPropagation();

            const wasOpen = !popup.hidden;

            calendarControllers.forEach(controller => {
                controller.close();
            });

            if (!wasOpen) {
                render();
                popup.hidden = false;
                button.setAttribute('aria-expanded', 'true');
            }
        });

        popup.addEventListener('click', function (event) {
            event.stopPropagation();

            const target = event.target.closest('button');

            if (!target) return;

            if (target.hasAttribute('data-prev')) {
                const date =
                    new Date(viewYear, viewMonth - 1, 1);

                viewYear = date.getFullYear();
                viewMonth = date.getMonth();

                render();
                return;
            }

            if (target.hasAttribute('data-next')) {
                const date =
                    new Date(viewYear, viewMonth + 1, 1);

                viewYear = date.getFullYear();
                viewMonth = date.getMonth();

                render();
                return;
            }

            if (target.dataset.date) {
                choose(target.dataset.date);
                return;
            }

            if (target.hasAttribute('data-today')) {
                choose(todayISO());
                return;
            }

            if (target.hasAttribute('data-clear')) {
                selectedDate = null;
                onSelect(null);
                close();
            }
        });

        popup.addEventListener('change', function (event) {
            event.stopPropagation();

            if (event.target.matches('.calendar-month-select')) {
                viewMonth = Number(event.target.value);
                render();
            }

            if (event.target.matches('.calendar-year-select')) {
                viewYear = Number(event.target.value);
                render();
            }
        });

        const controller = {
            close,

            reset() {
                selectedDate = null;
                close();
            }
        };

        calendarControllers.push(controller);

        return controller;
    }

    // Kalender utama
    createCalendar(
        'mainDateButton',
        'mainCalendarPopup',
        '2024-11-18',
        function (iso) {
            get('mainDateText').textContent =
                formatLongDate(iso);

            const date = new Date(iso + 'T12:00:00');

            get('topDate').textContent =
                date.toLocaleDateString('id-ID', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                }).toUpperCase();
        }
    );

    // Kalender filter tabel
    const tableCalendar = createCalendar(
        'filterDateButton',
        'filterCalendarPopup',
        '2024-11-18',
        function (iso) {
            selectedFilterDate = iso;

            get('filterDateText').textContent =
                iso
                    ? formatLongDate(iso)
                    : 'Semua Tanggal';

            renderOrders();
        },
        true
    );

    document.addEventListener('click', function (event) {
        if (!event.target.closest('.nayla-calendar')) {
            calendarControllers.forEach(controller => {
                controller.close();
            });
        }
    });

    // ======================================
    // STATISTIK
    // ======================================

    function renderStats() {
        get('totalOrders').textContent = orders.length;
        get('sidebarCount').textContent = orders.length;

        const count = status =>
            orders.filter(order => order.status === status).length;

        get('validationCount').textContent =
            count('Perlu Validasi');

        get('repairCount').textContent =
            count('Dalam Perbaikan');

        get('pickupCount').textContent =
            count('Siap Diambil');

        get('completedCount').textContent =
            count('Selesai');

        get('cancelledCount').textContent =
            count('Dibatalkan');

        const income = orders
            .filter(order => order.payment === 'Sudah Dibayar')
            .reduce((total, order) => total + order.total, 0);

        get('revenueValue').textContent = formatMoney(income);
    }

    // ======================================
    // TABEL PESANAN
    // ======================================

    const statusStyles = {
        'Perlu Validasi': 'warning',
        'Dalam Perbaikan': 'info',
        'Siap Diambil': 'purple',
        'Selesai': 'success',
        'Dibatalkan': 'cancelled'
    };

    const paymentStyles = {
        'Belum Dibayar': 'warning',
        'Sudah Dibayar': 'success',
        'Dibatalkan': 'cancelled'
    };

    function renderOrders() {
        const search =
            get('searchInput').value.trim().toLowerCase();

        const filtered = orders.filter(order => {
            const searchable = [
                order.id,
                order.customer,
                order.phone,
                order.device,
                order.service
            ].join(' ').toLowerCase();

            const matchesSearch = searchable.includes(search);

            const matchesStatus =
                get('statusFilter').value === 'all' ||
                order.status === get('statusFilter').value;

            const matchesPayment =
                get('paymentFilter').value === 'all' ||
                order.payment === get('paymentFilter').value;

            const matchesDate =
                selectedFilterDate === null ||
                order.date === selectedFilterDate;

            return (
                matchesSearch &&
                matchesStatus &&
                matchesPayment &&
                matchesDate
            );
        });

        get('ordersTableBody').innerHTML =
            filtered.map(order => `
                <tr>

                    <td>
                        <strong class="order-id">
                            #${escapeHtml(order.id)}
                        </strong>
                        <span class="cell-subtext">
                            ${formatLongDate(order.date)}
                        </span>
                    </td>

                    <td>
                        <strong class="customer-name">
                            ${escapeHtml(order.customer)}
                        </strong>
                        <span class="cell-subtext">
                            ${escapeHtml(order.phone)}
                        </span>
                    </td>

                    <td>${escapeHtml(order.device)}</td>

                    <td>${escapeHtml(order.service)}</td>

                    <td>
                        <span class="status-badge ${statusStyles[order.status]}">
                            <span class="badge-dot"></span>
                            ${escapeHtml(order.status)}
                        </span>
                    </td>

                    <td>
                        <span class="status-badge ${paymentStyles[order.payment]}">
                            <span class="badge-dot"></span>
                            ${escapeHtml(order.payment)}
                        </span>
                    </td>

                    <td class="price-cell">
                        ${formatMoney(order.total)}
                    </td>

                    <td>
                        <button
                            type="button"
                            class="detail-btn"
                            data-id="${escapeHtml(order.id)}"
                        >
                            Lihat detail →
                        </button>
                    </td>

                </tr>
            `).join('');

        get('emptyState').hidden = filtered.length > 0;

        get('resultCount').textContent =
            `Menampilkan ${filtered.length} dari ${orders.length} pesanan`;
    }

    // ======================================
    // MODAL DETAIL
    // ======================================

    function openDetail(id) {
        const order = orders.find(item => item.id === id);

        if (!order) return;

        get('modalTitle').textContent = '#' + order.id;

        const details = [
            ['Pelanggan', order.customer],
            ['WhatsApp', order.phone],
            ['Perangkat', order.device],
            ['Layanan', order.service],
            ['Tanggal', formatLongDate(order.date)],
            ['Status', order.status],
            ['Pembayaran', order.payment],
            ['Total', formatMoney(order.total)]
        ];

        const content = get('modalBody');
        content.replaceChildren();

        details.forEach(([label, value]) => {
            const row = document.createElement('div');
            row.className = 'detail-row';

            const name = document.createElement('span');
            name.textContent = label;

            const result = document.createElement('strong');
            result.textContent = value;

            row.append(name, result);
            content.append(row);
        });

        get('detailModal').hidden = false;
        document.body.classList.add('modal-open');
    }

    function closeDetail() {
        get('detailModal').hidden = true;
        document.body.classList.remove('modal-open');
    }

    get('ordersTableBody').addEventListener('click', event => {
        const button = event.target.closest('.detail-btn');

        if (button) {
            openDetail(button.dataset.id);
        }
    });

    get('closeModal').addEventListener('click', closeDetail);
    get('closeModalBottom').addEventListener('click', closeDetail);

    get('detailModal').addEventListener('click', event => {
        if (event.target === get('detailModal')) {
            closeDetail();
        }
    });

    // ======================================
    // FILTER
    // ======================================

    get('searchInput').addEventListener('input', renderOrders);
    get('statusFilter').addEventListener('change', renderOrders);
    get('paymentFilter').addEventListener('change', renderOrders);

    function resetFilters() {
        get('searchInput').value = '';
        get('statusFilter').value = 'all';
        get('paymentFilter').value = 'all';

        selectedFilterDate = null;

        get('filterDateText').textContent =
            'Semua Tanggal';

        tableCalendar.reset();
        renderOrders();
    }

    get('resetFilters').addEventListener('click', resetFilters);

    get('seeAllBtn').addEventListener('click', function () {
        resetFilters();

        get('ordersSection').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });

    // ======================================
    // SIDEBAR MOBILE
    // ======================================

    const sidebar = get('sidebar');
    const overlay = get('sidebarOverlay');
    const menuButton = get('mobileMenuBtn');

    function setSidebar(open) {
        sidebar.classList.toggle('open', open);
        overlay.classList.toggle('show', open);

        menuButton.setAttribute(
            'aria-expanded',
            String(open)
        );
    }

    menuButton.addEventListener('click', function () {
        setSidebar(!sidebar.classList.contains('open'));
    });

    overlay.addEventListener('click', function () {
        setSidebar(false);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            calendarControllers.forEach(controller => {
                controller.close();
            });

            if (!get('detailModal').hidden) {
                closeDetail();
            }

            setSidebar(false);
        }
    });

    // ======================================
    // INISIALISASI DASHBOARD
    // ======================================

    renderStats();
    renderOrders();

    function initializeIcons() {
        if (window.lucide) {
            lucide.createIcons();
        }
    }

    if (window.lucide) {
        initializeIcons();
    } else {
        window.addEventListener('load', initializeIcons, {
            once: true
        });
    }

});
</script>

</body>
</html>