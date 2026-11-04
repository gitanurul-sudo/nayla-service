
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan | Nayla Service Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite([
        'resources/css/admin-dashboard.css',
        'resources/css/admin-pesanan.css'
    ])
    <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js" defer></script>
</head>

<body>

<div class="admin-layout">

    <!-- =========================
         SIDEBAR
    ========================== -->
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

                <a href="{{ route('admin.pesanan') }}" class="nav-item active" aria-current="page">
                    <i data-lucide="file-text" class="nav-icon"></i>
                    <span>Pesanan</span>
                    <span class="nav-count" id="sidebarOrderCount">5</span>
                </a>

                <a href="{{ route('admin.update-status') }}" class="nav-item">
                    <i data-lucide="refresh-cw" class="nav-icon"></i>
                    <span>Update Status</span>
                </a>

                <a href="{{ route('admin.pelanggan') }}" class="nav-item">
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

    <!-- =========================
         MAIN CONTENT
    ========================== -->
    <div class="main-area">

        <!-- TOPBAR -->
        <header class="topbar">

            <div class="topbar-left">

                <button
                    type="button"
                    id="mobileMenuBtn"
                    class="mobile-menu-btn"
                    aria-label="Buka navigasi"
                    aria-expanded="false">
                    <i data-lucide="menu"></i>
                </button>

                <div>
                    <p class="top-date">
                        SENIN, 18 NOVEMBER 2024
                    </p>

                    <h1>Pesanan</h1>
                </div>

            </div>

            <span class="profile-avatar">NA</span>

        </header>

        <!-- HALAMAN PESANAN -->
        <main class="orders-page">

            <!-- HEADING -->
            <section class="page-heading">

                <div>
                    <p class="eyebrow">MANAJEMEN PESANAN</p>

                    <h2>Semua pesanan</h2>

                    <p class="page-description">
                        Kelola pesanan masuk dan teruskan ke teknisi
                        untuk pemeriksaan.
                    </p>
                </div>

                <button
                    type="button"
                    class="add-button"
                    id="addOrderButton">

                    <span>＋</span>
                    Tambah pesanan
                </button>

            </section>

            <!-- =========================
                 DAFTAR PESANAN
            ========================== -->
            <section class="orders-card">

                <!-- SEARCH & FILTER -->
                <div class="filters-bar">

                    <div class="search-wrapper">

                        <span class="search-icon">⌕</span>

                        <input
                            type="search"
                            id="searchInput"
                            placeholder="Cari pesanan, pelanggan, atau perangkat..."
                            aria-label="Cari pesanan">
                    </div>

                    <select id="statusFilter" aria-label="Filter status">
                        <option value="all">Semua Status</option>
                        <option value="Perlu Validasi">Perlu Validasi</option>
                        <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                        <option value="Siap Diambil">Siap Diambil</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                    </select>

                    <select id="paymentFilter" aria-label="Filter pembayaran">
                        <option value="all">Semua Pembayaran</option>
                        <option value="Belum Dibayar">Belum Dibayar</option>
                        <option value="Sudah Dibayar">Sudah Dibayar</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                    </select>

                    <select id="dateFilter" aria-label="Filter tanggal">
                        <option value="all">Semua Tanggal</option>
                        <option value="2024-11-18">18 November 2024</option>
                        <option value="2024-11-17">17 November 2024</option>
                        <option value="2024-11-16">16 November 2024</option>
                    </select>

                    <button type="button"
                            id="resetFilters"
                            class="filter-button">

                        ☰ <span>Filter</span>
                    </button>

                </div>

                <!-- TABEL -->
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

                        <tbody id="ordersTableBody">
                            <!-- Data dibuat oleh JavaScript -->
                        </tbody>

                    </table>

                </div>

                <!-- JIKA TIDAK ADA DATA -->
                <div id="emptyState" class="empty-state" hidden>
                    Tidak ada pesanan yang sesuai dengan pencarian.
                </div>

                <!-- FOOTER -->
                <div class="table-footer">

                    <span id="resultCount">
                        Menampilkan 5 pesanan
                    </span>

                    <span>
                        Data demonstrasi frontend
                    </span>

                </div>

            </section>

        </main>

    </div>
</div>

<!-- OVERLAY SIDEBAR MOBILE -->
<div id="sidebarOverlay" class="sidebar-overlay"></div>


<!-- =========================
     MODAL LIHAT DETAIL
========================== -->
<div id="detailModal" class="modal-backdrop" hidden>

    <div class="modal-panel"
         role="dialog"
         aria-modal="true"
         aria-labelledby="detailTitle">

        <div class="modal-header">

            <div>
                <p class="eyebrow">DETAIL PESANAN</p>
                <h2 id="detailTitle">Detail pesanan</h2>
            </div>

            <button
                class="close-button"
                type="button"
                data-close-modal
                aria-label="Tutup">
                &times;
            </button>

        </div>

        <div id="detailContent" class="modal-detail-content"></div>

        <div class="modal-actions">

            <button type="button"
                    class="secondary-button"
                    data-close-modal>
                Tutup
            </button>

        </div>

    </div>

</div>


<!-- =========================
     MODAL FORM PESANAN BARU
========================== -->
<div id="addModal" class="modal-backdrop" hidden>

    <div class="modal-panel order-form-modal"
         role="dialog"
         aria-modal="true"
         aria-labelledby="addTitle">

        <!-- HEADER MODAL -->
        <div class="order-modal-header">

            <div>
                <h2 id="addTitle">Form pesanan</h2>

                <p>
                    Masukkan data customer dan perangkat
                    yang akan diservice.
                </p>
            </div>

            <button
                type="button"
                class="close-button"
                data-close-modal
                aria-label="Tutup formulir">
                &times;
            </button>

        </div>

        <!-- FORM -->
        <form id="addOrderForm" class="order-modal-form">

            <!-- =========================
                 01 INFORMASI CUSTOMER
            ========================== -->
            <section class="form-section">

                <div class="form-section-heading">

                    <span class="section-number">01</span>

                    <div>
                        <h3>Informasi customer</h3>
                        <p>Pastikan nomor WhatsApp dapat dihubungi.</p>
                    </div>

                </div>

                <div class="form-grid">

                    <!-- NAMA -->
                    <div class="form-field">

                        <label for="customerName">
                            Nama customer
                        </label>

                        <input
                            type="text"
                            id="customerName"
                            name="customerName"
                            placeholder="Contoh: Dinda Aulia"
                            maxlength="80"
                            required>

                    </div>

                    <!-- WHATSAPP -->
                    <div class="form-field">

                        <label for="customerPhone">
                            Nomor HP / WhatsApp
                        </label>

                        <input
                            type="tel"
                            id="customerPhone"
                            name="customerPhone"
                            placeholder="Contoh: 0812 3456 7890"
                            inputmode="tel"
                            maxlength="20"
                            pattern="[0-9+ ]{9,20}"
                            title="Gunakan angka, spasi, atau tanda +"
                            required>

                    </div>

                </div>

            </section>


            <!-- =========================
                 02 INFORMASI PERANGKAT
            ========================== -->
            <section class="form-section">

                <div class="form-section-heading">

                    <span class="section-number">02</span>

                    <div>
                        <h3>Informasi perangkat</h3>
                        <p>Detail perangkat dan keluhan customer.</p>
                    </div>

                </div>

                <div class="form-grid">

                    <!-- MODEL HP -->
                    <div class="form-field">

                        <label for="deviceName">
                            Model / tipe perangkat
                        </label>

                        <input
                            type="text"
                            id="deviceName"
                            name="deviceName"
                            placeholder="Contoh: iPhone 13 Pro"
                            maxlength="80"
                            required>

                    </div>

                    <!-- LAYANAN -->
                    <div class="form-field">

                        <label for="serviceName">
                            Jenis layanan
                        </label>

                        <select
                            id="serviceName"
                            name="serviceName"
                            required>

                            <option value="Diagnosa perangkat">
                                Diagnosa perangkat
                            </option>

                            <option value="Ganti Layar">
                                Ganti Layar
                            </option>

                            <option value="Ganti Baterai">
                                Ganti Baterai
                            </option>

                            <option value="Perbaikan Charging">
                                Perbaikan Charging
                            </option>

                            <option value="Perbaikan Kamera">
                                Perbaikan Kamera
                            </option>

                            <option value="Perbaikan Mesin">
                                Perbaikan Mesin
                            </option>

                            <option value="Perbaikan Software">
                                Perbaikan Software
                            </option>

                            <option value="Lainnya">
                                Lainnya
                            </option>

                        </select>

                    </div>

                    <!-- DESKRIPSI MASALAH -->
                    <div class="form-field full-width">

                        <label for="deviceProblem">
                            Deskripsi masalah
                        </label>

                        <textarea
                            id="deviceProblem"
                            name="deviceProblem"
                            placeholder="Jelaskan keluhan atau kerusakan perangkat..."
                            rows="4"
                            maxlength="1000"
                            required></textarea>

                    </div>

                </div>

                <!-- =========================
                     UPLOAD FOTO
                ========================== -->
                <div class="photo-upload-box">

                    <div class="photo-upload-info">

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.7"
                             aria-hidden="true">

                            <rect x="6" y="2"
                                  width="12" height="20" rx="2"/>

                            <path d="M10 18h4"/>

                        </svg>

                        <div>
                            <strong>Foto kondisi perangkat</strong>

                            <p>
                                Opsional · JPG atau PNG, maks. 5 MB
                            </p>

                            <span id="selectedPhotoName"></span>
                        </div>

                    </div>

                    <input
                        type="file"
                        id="devicePhoto"
                        name="devicePhoto"
                        accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                        hidden>

                    <button
                        type="button"
                        id="choosePhotoButton"
                        class="choose-photo-button">

                        Pilih foto

                    </button>

                </div>

                <!-- PESAN ERROR FOTO -->
                <p id="photoError"
                   class="photo-error"
                   role="alert"
                   hidden></p>

                <!-- PREVIEW FOTO -->
                <img
                    id="photoPreview"
                    class="photo-preview"
                    alt="Pratinjau foto perangkat"
                    hidden>

            </section>

            <!-- =========================
                 TOMBOL FORM
            ========================== -->
            <div class="order-modal-footer">

                <button
                    type="button"
                    class="secondary-button"
                    data-close-modal>

                    Batal

                </button>

                <button
                    type="submit"
                    class="create-order-button">

                    Buat pesanan
                    <span aria-hidden="true">→</span>

                </button>

            </div>

        </form>

    </div>

</div>


<!-- NOTIFIKASI -->
<div id="toast"
     class="toast"
     role="status"
     aria-live="polite"></div>


<!-- =========================
     JAVASCRIPT
========================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ====================================
    // DATA DUMMY PESANAN
    // ====================================

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

    // ====================================
    // AMBIL ELEMEN
    // ====================================

    const tbody = document.getElementById('ordersTableBody');
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const paymentFilter = document.getElementById('paymentFilter');
    const dateFilter = document.getElementById('dateFilter');
    const emptyState = document.getElementById('emptyState');
    const resultCount = document.getElementById('resultCount');

    const detailModal = document.getElementById('detailModal');
    const addModal = document.getElementById('addModal');
    const toast = document.getElementById('toast');

    const addOrderForm = document.getElementById('addOrderForm');
    const photoInput = document.getElementById('devicePhoto');
    const photoPreview = document.getElementById('photoPreview');
    const photoError = document.getElementById('photoError');
    const selectedPhotoName = document.getElementById('selectedPhotoName');

    let demoSequence = 1;
    let photoPreviewUrl = null;
    let toastTimer;

    // ====================================
    // UTILITAS
    // ====================================

    const formatMoney = number =>
        'Rp ' + Number(number).toLocaleString('id-ID');

    function formatDate(value) {
        return new Intl.DateTimeFormat('id-ID', {
            day: 'numeric',
            month: 'short',
            year: 'numeric',
            timeZone: 'UTC'
        }).format(new Date(value + 'T12:00:00Z'));
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

    function showToast(message) {
        toast.textContent = message;
        toast.classList.add('show');

        clearTimeout(toastTimer);

        toastTimer = setTimeout(() => {
            toast.classList.remove('show');
        }, 3200);
    }

    function badge(text, color) {
        return `
            <span class="status-badge ${color}">
                <span class="badge-dot"></span>
                ${escapeHtml(text)}
            </span>
        `;
    }

    const statusColors = {
        'Perlu Validasi': 'warning',
        'Dalam Perbaikan': 'info',
        'Siap Diambil': 'purple',
        'Selesai': 'success',
        'Dibatalkan': 'warning'
    };

    const paymentColors = {
        'Belum Dibayar': 'success',
        'Sudah Dibayar': 'success',
        'Dibatalkan': 'warning'
    };

    // ====================================
    // RENDER TABEL
    // ====================================

    function renderOrders() {

        const keyword =
            searchInput.value.trim().toLowerCase();

        const filtered = orders.filter(order => {

            const text = [
                order.id,
                order.customer,
                order.phone,
                order.device,
                order.service
            ].join(' ').toLowerCase();

            return text.includes(keyword)

                && (
                    statusFilter.value === 'all' ||
                    order.status === statusFilter.value
                )

                && (
                    paymentFilter.value === 'all' ||
                    order.payment === paymentFilter.value
                )

                && (
                    dateFilter.value === 'all' ||
                    order.date === dateFilter.value
                );
        });

        tbody.innerHTML = filtered.map(order => `
            <tr>

                <td>
                    <strong class="order-id">
                        #${escapeHtml(order.id)}
                    </strong>

                    <span class="cell-subtext">
                        ${formatDate(order.date)}
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
                    ${badge(order.status, statusColors[order.status])}
                </td>

                <td>
                    ${badge(order.payment, paymentColors[order.payment])}
                </td>

                <td class="price-cell">
                    ${formatMoney(order.total)}
                </td>

                <td>
                    <button
                        type="button"
                        class="detail-button"
                        data-id="${escapeHtml(order.id)}">

                        Lihat detail
                        <span>→</span>

                    </button>
                </td>

            </tr>
        `).join('');

        emptyState.hidden = filtered.length > 0;

        resultCount.textContent =
            `Menampilkan ${filtered.length} dari ${orders.length} pesanan`;

        document.getElementById('sidebarOrderCount').textContent =
            orders.length;
    }

    // ====================================
    // BUKA DAN TUTUP MODAL
    // ====================================

    function openModal(modal) {
        modal.hidden = false;

        document.body.classList.add('modal-open');

        modal.querySelector('.close-button').focus();
    }

    function clearPhotoPreview() {

        if (photoPreviewUrl) {
            URL.revokeObjectURL(photoPreviewUrl);
            photoPreviewUrl = null;
        }

        photoPreview.removeAttribute('src');
        photoPreview.hidden = true;

        selectedPhotoName.textContent = '';

        photoError.textContent = '';
        photoError.hidden = true;
    }

    function closeModals() {

        detailModal.hidden = true;
        addModal.hidden = true;

        document.body.classList.remove('modal-open');

        addOrderForm.reset();
        clearPhotoPreview();
    }

    // ====================================
    // LIHAT DETAIL
    // ====================================

    function showDetail(id) {

        const order = orders.find(item => item.id === id);

        if (!order) return;

        document.getElementById('detailTitle').textContent =
            '#' + order.id;

        const rows = [
            ['Pelanggan', order.customer],
            ['WhatsApp', order.phone],
            ['Perangkat', order.device],
            ['Layanan', order.service],
            ['Tanggal Masuk', formatDate(order.date)],
            ['Status', order.status],
            ['Pembayaran', order.payment],
            ['Total', formatMoney(order.total)],
            [
                'Deskripsi masalah',
                order.problem || 'Belum ada keterangan'
            ]
        ];

        const content = document.getElementById('detailContent');

        content.replaceChildren();

        rows.forEach(([label, value]) => {

            const row = document.createElement('div');
            row.className = 'detail-row';

            const name = document.createElement('span');
            name.textContent = label;

            const data = document.createElement('strong');
            data.textContent = value;

            row.append(name, data);
            content.append(row);
        });

        openModal(detailModal);
    }

    tbody.addEventListener('click', function (event) {

        const button = event.target.closest('.detail-button');

        if (button) {
            showDetail(button.dataset.id);
        }
    });

    document.getElementById('addOrderButton')
        .addEventListener('click', function () {
            openModal(addModal);
        });

    document.querySelectorAll('[data-close-modal]')
        .forEach(button => {

            button.addEventListener('click', closeModals);
        });

    [detailModal, addModal].forEach(modal => {

        modal.addEventListener('click', function (event) {

            if (event.target === modal) {
                closeModals();
            }
        });
    });

    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape' &&
            (!detailModal.hidden || !addModal.hidden)) {
            closeModals();
        }
    });

    // ====================================
    // PILIH DAN PREVIEW FOTO
    // ====================================

    document.getElementById('choosePhotoButton')
        .addEventListener('click', function () {
            photoInput.click();
        });

    photoInput.addEventListener('change', function () {

        clearPhotoPreview();

        const file = photoInput.files[0];

        if (!file) return;

        const allowedTypes = ['image/jpeg', 'image/png'];
        const maxSize = 5 * 1024 * 1024;

        if (!allowedTypes.includes(file.type)) {

            photoError.textContent =
                'Foto harus berformat JPG atau PNG.';

            photoError.hidden = false;
            photoInput.value = '';
            return;
        }

        if (file.size > maxSize) {

            photoError.textContent =
                'Ukuran foto maksimal 5 MB.';

            photoError.hidden = false;
            photoInput.value = '';
            return;
        }

        selectedPhotoName.textContent = file.name;

        photoPreviewUrl = URL.createObjectURL(file);

        photoPreview.src = photoPreviewUrl;
        photoPreview.hidden = false;
    });

    // ====================================
    // SIMULASI TAMBAH PESANAN
    // ====================================

    addOrderForm.addEventListener('submit', function (event) {

        event.preventDefault();

        if (!addOrderForm.reportValidity() || !photoError.hidden) {
            return;
        }

        const customer =
            document.getElementById('customerName').value.trim();

        const phone =
            document.getElementById('customerPhone').value.trim();

        const device =
            document.getElementById('deviceName').value.trim();

        const service =
            document.getElementById('serviceName').value;

        const problem =
            document.getElementById('deviceProblem').value.trim();

        if (!customer || !phone || !device || !service || !problem) {

            showToast('Lengkapi semua kolom wajib.');
            return;
        }

        const now = new Date();

        const date = [
            now.getFullYear(),
            String(now.getMonth() + 1).padStart(2, '0'),
            String(now.getDate()).padStart(2, '0')
        ].join('-');

        // ID DEMO, BUKAN NOMOR PESANAN RESMI
        const id =
            `DEMO-${String(demoSequence++).padStart(3, '0')}`;

        orders.unshift({
            id: id,
            date: date,
            customer: customer,
            phone: phone,
            device: device,
            service: service,
            problem: problem,
            status: 'Perlu Validasi',
            payment: 'Belum Dibayar',
            total: 0
        });

        // RESET FILTER
        searchInput.value = '';
        statusFilter.value = 'all';
        paymentFilter.value = 'all';
        dateFilter.value = 'all';

        renderOrders();
        closeModals();

        showToast(
            'Pesanan demo berhasil ditambahkan. ' +
            'Data belum tersimpan di database.'
        );
    });

    // ====================================
    // FILTER PESANAN
    // ====================================

    [statusFilter, paymentFilter, dateFilter]
        .forEach(select => {

            select.addEventListener('change', renderOrders);
        });

    searchInput.addEventListener('input', renderOrders);

    document.getElementById('resetFilters')
        .addEventListener('click', function () {

            searchInput.value = '';
            statusFilter.value = 'all';
            paymentFilter.value = 'all';
            dateFilter.value = 'all';

            renderOrders();
        });

    // ====================================
    // NAVBAR MOBILE
    // ====================================

    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const menuButton = document.getElementById('mobileMenuBtn');

    function toggleSidebar(open) {

        sidebar.classList.toggle('open', open);
        overlay.classList.toggle('show', open);

        menuButton.setAttribute(
            'aria-expanded',
            String(open)
        );
    }

    menuButton.addEventListener('click', function () {

        toggleSidebar(!sidebar.classList.contains('open'));
    });

    overlay.addEventListener('click', function () {

        toggleSidebar(false);
    });

    // ====================================
    // JALANKAN PERTAMA KALI
    // ====================================

    renderOrders();


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