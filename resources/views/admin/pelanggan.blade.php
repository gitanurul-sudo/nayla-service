
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pelanggan | Nayla Service Admin</title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    @vite([
        'resources/css/admin-dashboard.css',
        'resources/css/admin-pelanggan.css'
    ])
    <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js" defer></script>
</head>

<body>

<div class="admin-layout">

    <!-- SIDEBAR -->
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

                <a href="{{ route('admin.pelanggan') }}" class="nav-item active" aria-current="page">
                    <i data-lucide="users-round" class="nav-icon"></i>
                    <span>Pelanggan</span>
                </a>

                <a href="{{ route('admin.laporan') }}" class="nav-item">
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

    <!-- AREA UTAMA -->
    <div class="main-area">

        <!-- HEADER -->
        <header class="topbar">

            <div class="topbar-left">

                <button type="button"
                        id="mobileMenuBtn"
                        class="mobile-menu-btn"
                        aria-label="Buka menu admin"
                        aria-expanded="false">
                    <i data-lucide="menu"></i>
                </button>

                <div>
                    <p class="top-date">
                        SENIN, 18 NOVEMBER 2024
                    </p>

                    <h1>Pelanggan</h1>
                </div>

            </div>

            <span class="profile-avatar">NA</span>

        </header>

        <!-- CONTENT -->
        <main class="customers-page">

            <!-- JUDUL -->
            <section class="customers-heading">

                <p class="eyebrow">
                    DATABASE CUSTOMER
                </p>

                <h2>Pelanggan</h2>

                <p class="customers-description">
                    Riwayat dan informasi pelanggan Nayla Service.
                </p>

            </section>

            <!-- KARTU STATISTIK -->
            <section class="customer-stats">

                <article class="customer-stat-card">

                    <p class="stat-label">
                        TOTAL PELANGGAN
                    </p>

                    <strong id="totalCustomers">5</strong>

                    <span>
                        Data pelanggan terdaftar
                    </span>

                </article>

                <article class="customer-stat-card">

                    <p class="stat-label">
                        PELANGGAN AKTIF
                    </p>

                    <strong id="activeCustomers">3</strong>

                    <span>
                        Memiliki service berjalan
                    </span>

                </article>

                <article class="customer-stat-card">

                    <p class="stat-label">
                        REPEAT ORDER
                    </p>

                    <strong id="repeatCustomers">2</strong>

                    <span>
                        Pelanggan yang kembali
                    </span>

                </article>

            </section>

            <!-- DAFTAR PELANGGAN -->
            <section class="customers-card">

                <!-- SEARCH & FILTER -->
                <div class="customers-toolbar">

                    <div class="customer-search">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             aria-hidden="true">
                            <circle cx="11" cy="11" r="7"></circle>
                            <path d="m20 20-4-4"></path>
                        </svg>

                        <input
                            type="search"
                            id="customerSearch"
                            placeholder="Cari nama atau nomor WhatsApp..."
                            aria-label="Cari pelanggan"
                            autocomplete="off"
                        >

                    </div>

                    <select id="customerFilter"
                            aria-label="Filter pelanggan">

                        <option value="all">
                            Semua Pelanggan
                        </option>

                        <option value="active">
                            Pelanggan Aktif
                        </option>

                        <option value="repeat">
                            Repeat Order
                        </option>

                        <option value="completed">
                            Service Selesai
                        </option>

                        <option value="cancelled">
                            Dibatalkan
                        </option>

                    </select>

                </div>

                <!-- HASIL -->
                <div class="customers-list"
                     id="customersList">
                </div>

                <!-- JIKA KOSONG -->
                <div class="customers-empty"
                     id="emptyCustomers"
                     hidden>

                    <div class="empty-icon">⌕</div>

                    <h3>Pelanggan tidak ditemukan</h3>

                    <p>
                        Periksa kembali nama atau
                        nomor WhatsApp yang dimasukkan.
                    </p>

                </div>

                <div class="customers-footer">
                    <span id="customerCount">
                        Menampilkan 5 pelanggan
                    </span>

                    <span>Data demonstrasi frontend</span>
                </div>

            </section>

        </main>

    </div>
</div>

<!-- OVERLAY MOBILE -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- NOTIFIKASI -->
<div class="toast" id="toast" role="status"
     aria-live="polite"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // ======================================
    // DATA DUMMY PELANGGAN
    // ======================================

    const customers = [
        {
            id: 1,
            name: 'Dinda Aulia',
            phone: '0812 3456 8890',
            device: 'iPhone 13 Pro',
            total: 0,
            status: 'Perlu Validasi',
            active: true,
            repeat: false
        },
        {
            id: 2,
            name: 'Rafi Maulana',
            phone: '0813 9876 1122',
            device: 'Samsung S23',
            total: 850000,
            status: 'Dalam Perbaikan',
            active: true,
            repeat: true
        },
        {
            id: 3,
            name: 'Kevin Wijaya',
            phone: '0857 1122 3344',
            device: 'Xiaomi 13T',
            total: 650000,
            status: 'Siap Diambil',
            active: true,
            repeat: false
        },
        {
            id: 4,
            name: 'Salsa Putri',
            phone: '0812 6677 9900',
            device: 'iPhone 11',
            total: 1100000,
            status: 'Selesai',
            active: false,
            repeat: true
        },
        {
            id: 5,
            name: 'Arga Pratama',
            phone: '0819 2233 4455',
            device: 'Oppo Reno 10',
            total: 0,
            status: 'Dibatalkan',
            active: false,
            repeat: false
        }
    ];

    // ======================================
    // ELEMENT
    // ======================================

    const searchInput =
        document.getElementById('customerSearch');

    const filter =
        document.getElementById('customerFilter');

    const customerList =
        document.getElementById('customersList');

    const emptyState =
        document.getElementById('emptyCustomers');

    const customerCount =
        document.getElementById('customerCount');

    const formatRupiah = number =>
        'Rp ' + Number(number).toLocaleString('id-ID');

    const escapeHtml = value =>
        String(value).replace(/[&<>"']/g, char => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;'
        }[char]));

    // ======================================
    // BADGE STATUS
    // ======================================

    function statusClass(status) {
        const classes = {
            'Perlu Validasi': 'warning',
            'Dalam Perbaikan': 'info',
            'Siap Diambil': 'purple',
            'Selesai': 'success',
            'Dibatalkan': 'cancelled'
        };

        return classes[status] || 'neutral';
    }

    function getInitials(name) {
        return name
            .trim()
            .split(/\s+/)
            .slice(0, 2)
            .map(word => word.charAt(0))
            .join('')
            .toUpperCase();
    }

    // ======================================
    // STATISTIK
    // ======================================

    function updateStats() {

        document.getElementById('totalCustomers')
            .textContent = customers.length;

        document.getElementById('activeCustomers')
            .textContent = customers.filter(
                customer => customer.active
            ).length;

        document.getElementById('repeatCustomers')
            .textContent = customers.filter(
                customer => customer.repeat
            ).length;
    }

    // ======================================
    // RENDER PELANGGAN
    // ======================================

    function renderCustomers() {

        const keyword =
            searchInput.value.trim().toLowerCase();

        const selectedFilter = filter.value;

        const filtered = customers.filter(customer => {

            const searchable = (
                customer.name + ' ' + customer.phone
            ).toLowerCase();

            const matchesSearch =
                searchable.includes(keyword);

            let matchesFilter = true;

            if (selectedFilter === 'active') {
                matchesFilter = customer.active;
            }

            if (selectedFilter === 'repeat') {
                matchesFilter = customer.repeat;
            }

            if (selectedFilter === 'completed') {
                matchesFilter =
                    customer.status === 'Selesai';
            }

            if (selectedFilter === 'cancelled') {
                matchesFilter =
                    customer.status === 'Dibatalkan';
            }

            return matchesSearch && matchesFilter;
        });

        customerList.innerHTML = filtered.map(customer => `
            <article class="customer-row">

                <div class="customer-identity">

                    <span class="customer-avatar">
                        ${escapeHtml(getInitials(customer.name))}
                    </span>

                    <div class="customer-person">
                        <strong>
                            ${escapeHtml(customer.name)}
                        </strong>

                        <span>
                            ${escapeHtml(customer.phone)}
                        </span>
                    </div>

                </div>

                <div class="customer-device">
                    <span class="field-label">
                        PERANGKAT TERAKHIR
                    </span>

                    <strong>
                        ${escapeHtml(customer.device)}
                    </strong>
                </div>

                <div class="customer-transactions">
                    <span class="field-label">
                        TOTAL TRANSAKSI
                    </span>

                    <strong>
                        ${formatRupiah(customer.total)}
                    </strong>
                </div>

                <div class="customer-status">
                    <span class="status-badge ${statusClass(customer.status)}">
                        <span class="badge-dot"></span>
                        ${escapeHtml(customer.status)}
                    </span>
                </div>

            </article>
        `).join('');

        emptyState.hidden = filtered.length !== 0;

        customerList.hidden = filtered.length === 0;

        customerCount.textContent =
            `Menampilkan ${filtered.length} dari ${customers.length} pelanggan`;
    }

    // ======================================
    // PENCARIAN & FILTER
    // ======================================

    searchInput.addEventListener(
        'input', renderCustomers
    );

    filter.addEventListener(
        'change', renderCustomers
    );

    // ======================================
    // SIDEBAR MOBILE
    // ======================================

    const sidebar =
        document.getElementById('sidebar');

    const overlay =
        document.getElementById('sidebarOverlay');

    const menuButton =
        document.getElementById('mobileMenuBtn');

    function setSidebar(open) {
        sidebar.classList.toggle('open', open);
        overlay.classList.toggle('show', open);
        menuButton.setAttribute(
            'aria-expanded', String(open)
        );
    }

    menuButton.addEventListener('click', function () {
        setSidebar(!sidebar.classList.contains('open'));
    });

    overlay.addEventListener('click', function () {
        setSidebar(false);
    });

    // ======================================
    // INISIALISASI
    // ======================================

    updateStats();
    renderCustomers();


    // Render ikon sidebar setelah seluruh elemen tersedia.
    function initializeIcons() {
        if (window.lucide) window.lucide.createIcons();
    }

    if (window.lucide) {
        initializeIcons();
    } else {
        window.addEventListener('load', initializeIcons, { once: true });
    }

});
</script>

</body>
</html>