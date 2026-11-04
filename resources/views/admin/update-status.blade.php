
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Status | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    @vite('resources/css/admin-update-status.css')

    <!-- Lucide Icons -->
    <script
        src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"
        defer
    ></script>

    <!-- Gaya khusus modal publikasi sukses, tetap dalam file ini -->
    <style>
        .publish-success-backdrop {
            position: fixed;
            inset: 0;
            z-index: 3100;
            display: grid;
            place-items: center;
            padding: 20px;
            background: rgba(0, 0, 0, .82);
            backdrop-filter: blur(4px);
        }
        .publish-success-backdrop[hidden] { display: none !important; }
        .publish-success-card {
            position: relative;
            width: min(100%, 495px);
            padding: 54px 35px 35px;
            border: 1px solid #343a35;
            border-radius: 14px;
            background: linear-gradient(145deg, #141815, #101310);
            color: #f4f4f0;
            text-align: center;
            box-shadow: 0 30px 95px rgba(0, 0, 0, .65);
            animation: publish-success-enter .35s ease both;
        }
        .publish-success-close {
            position: absolute;
            top: 16px;
            right: 16px;
            display: grid;
            place-items: center;
            width: 35px;
            height: 35px;
            border: 0;
            border-radius: 50%;
            background: #2c322e;
            color: #d2d6d1;
            cursor: pointer;
        }
        .publish-success-close:hover { background: #414840; }
        .publish-success-close svg { width: 19px; height: 19px; }
        .publish-success-graphic {
            position: relative;
            display: grid;
            place-items: center;
            width: 210px;
            height: 150px;
            margin: 0 auto 12px;
        }
        .publish-success-ring {
            position: relative;
            z-index: 2;
            display: grid;
            place-items: center;
            width: 91px;
            height: 91px;
            border: 3px solid #ffcb6f;
            border-radius: 50%;
            background: radial-gradient(circle, #745321 0%, #4d391c 65%, #332718 100%);
            color: #fff2cf;
            box-shadow: 0 0 16px rgba(255, 189, 76, .7), 0 0 42px rgba(255, 189, 76, .24);
            animation: publish-success-pulse 2.3s ease-in-out infinite;
        }
        .publish-success-ring svg { width: 43px; height: 43px; stroke-width: 2.2; }
        .publish-success-spark {
            position: absolute;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: currentColor;
            box-shadow: 0 0 8px currentColor;
            animation: publish-success-sparkle 2s ease-in-out infinite;
        }
        .publish-success-spark:nth-child(2) { top: 8%; left: 50%; color: #f6bd58; }
        .publish-success-spark:nth-child(3) { top: 28%; left: 10%; color: #f6bd58; animation-delay: .3s; }
        .publish-success-spark:nth-child(4) { top: 33%; right: 11%; color: #77d88c; animation-delay: .5s; }
        .publish-success-spark:nth-child(5) { top: 71%; left: 8%; color: #77d88c; animation-delay: .7s; }
        .publish-success-spark:nth-child(6) { top: 77%; right: 9%; color: #f6bd58; animation-delay: .9s; }
        .publish-success-spark:nth-child(7) { bottom: 2%; left: 30%; color: #f6bd58; animation-delay: .4s; }
        .publish-success-spark:nth-child(8) { bottom: 2%; right: 29%; color: #77d88c; animation-delay: .6s; }
        .publish-success-spark:nth-child(9) { top: 15%; right: 29%; color: #77d88c; animation-delay: .2s; }
        .publish-success-card h2 {
            margin: 0 0 14px;
            font-family: 'Manrope', sans-serif;
            font-size: 21px;
            font-weight: 700;
            line-height: 1.4;
        }
        .publish-success-description {
            max-width: 365px;
            margin: 0 auto 30px;
            color: #acb0aa;
            font-size: 13px;
            line-height: 1.8;
        }
        .publish-success-description strong { color: #edc47e; }
        .publish-success-actions { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .publish-success-link, .publish-success-done {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 49px;
            padding: 0 12px;
            border-radius: 8px;
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
        }
        .publish-success-link { background: #101410; color: #eceeeb; border: 1px solid #353a35; text-decoration: none; }
        .publish-success-link:hover { border-color: #edae50; color: #edae50; }
        .publish-success-done { background: #f5bd5a; color: #20170b; border: 1px solid #f5bd5a; }
        .publish-success-done:hover { background: #ffd179; }
        @keyframes publish-success-enter {
            from { opacity: 0; transform: translateY(18px) scale(.96); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        @keyframes publish-success-pulse {
            50% { box-shadow: 0 0 26px rgba(255,189,76,.9), 0 0 58px rgba(255,189,76,.4); }
        }
        @keyframes publish-success-sparkle {
            0%, 100% { opacity: .3; transform: scale(.7); }
            50% { opacity: 1; transform: scale(1.4); }
        }
        @media (max-width: 600px) {
            .publish-success-card { padding: 48px 22px 25px; }
            .publish-success-card h2 { font-size: 18px; }
            .publish-success-actions { gap: 9px; }
            .publish-success-link, .publish-success-done { font-size: 12px; }
        }
        @media (prefers-reduced-motion: reduce) {
            .publish-success-card, .publish-success-ring, .publish-success-spark { animation: none; }
        }
    </style>
</head>

<body>

<div class="admin-layout">

    <!-- ======================================
         SIDEBAR ADMIN
    ======================================= -->

    <aside class="sidebar" id="sidebar">

        <a class="brand" href="{{ route('admin.dashboard') }}">
            <span class="brand-icon">N</span>

            <span>
                NAYLA <b>SERVICE</b>
            </span>
        </a>

        <p class="sidebar-caption">ADMIN CONSOLE</p>

        <nav class="sidebar-nav">

            <a
                href="{{ route('admin.dashboard') }}"
                class="nav-item"
            >
                <i data-lucide="layout-grid" class="nav-icon"></i>
                Dashboard
            </a>

            <a
                href="{{ route('admin.pesanan') }}"
                class="nav-item"
            >
                <i data-lucide="file-text" class="nav-icon"></i>

                Pesanan

                <span class="menu-count">5</span>
            </a>

            <a
                href="{{ route('admin.update-status') }}"
                class="nav-item active"
            >
                <i data-lucide="refresh-cw" class="nav-icon"></i>
                Update Status
            </a>

            <a
                href="{{ route('admin.pelanggan') }}"
                class="nav-item"
            >
                <i data-lucide="users-round" class="nav-icon"></i>
                Pelanggan
            </a>

            <a
                href="{{ route('admin.laporan') }}"
                class="nav-item"
            >
                <i data-lucide="chart-no-axes-column" class="nav-icon"></i>
                Laporan
            </a>

        </nav>

        <div class="sidebar-profile">

            <span class="avatar">NA</span>

            <span>
                <strong>Nayla Admin</strong>
                <small>Administrator</small>
            </span>

        </div>

    </aside>

    <!-- ======================================
         HALAMAN UTAMA
    ======================================= -->

    <div class="main-area">

        <!-- HEADER -->

        <header class="topbar">

            <div class="topbar-left">

                <button
                    type="button"
                    class="mobile-toggle"
                    id="mobileToggle"
                    aria-label="Buka menu"
                >
                    <i data-lucide="menu"></i>
                </button>

                <div>

                    <p class="date-label">
                        SENIN, 18 NOVEMBER 2024
                    </p>

                    <h1>Update Status</h1>

                    <p class="subtitle">
                        Kelola progres pesanan dan informasi yang
                        tampil ke customer secara real-time.
                    </p>

                </div>

            </div>

            <span class="avatar avatar-top">NA</span>

        </header>

        <main class="content">

            <!-- ======================================
                 TIMELINE STATUS
            ======================================= -->

            <div class="timeline" id="timeline">

                <div class="timeline-track"></div>
                <div class="timeline-fill" id="timelineFill"></div>

                @foreach([
                    'Pesanan Diterima',
                    'Pengecekan',
                    'Persetujuan',
                    'Proses Perbaikan',
                    'Siap Diambil',
                    'Selesai'
                ] as $index => $label)

                    <div
                        class="timeline-step"
                        data-step="{{ $index + 1 }}"
                    >
                        <span class="step-circle">
                            {{ $index + 1 }}
                        </span>

                        <span>{{ $label }}</span>
                    </div>

                @endforeach

            </div>

            <div class="page-grid">

                <!-- ======================================
                     ANTREAN UPDATE
                ======================================= -->

                <section class="panel queue-panel">

                    <div class="queue-heading">

                        <div>
                            <h2>Antrean Update</h2>

                            <p>
                                Pilih pesanan untuk update status.
                            </p>
                        </div>

                        <span
                            class="count-pill"
                            id="queueCount"
                        >
                            5
                        </span>

                    </div>

                    <!-- PENCARIAN PESANAN -->

                    <div class="search-box">

                        <span class="search-symbol">
                            <i data-lucide="search"></i>
                        </span>

                        <input
                            type="text"
                            id="queueSearch"
                            placeholder="Cari nomor pesanan, nama pelanggan..."
                            autocomplete="off"
                        >

                        <button
                            type="button"
                            id="filterButton"
                            aria-pressed="false"
                            aria-label="Filter pesanan"
                        >
                            <i data-lucide="list-filter"></i>
                        </button>

                    </div>

                    <div
                        class="queue-list"
                        id="queueList"
                    ></div>

                    <p id="queueEmpty" hidden>
                        Pesanan tidak ditemukan.
                    </p>

                </section>

                <!-- ======================================
                     WORKSPACE KANAN
                ======================================= -->

                <div class="workspace">

                    <!-- HEADER IDENTITAS PESANAN -->

                    <section class="panel order-header">

                        <span class="order-device-icon">
                            <i data-lucide="smartphone"></i>
                        </span>

                        <div class="order-identity">

                            <div class="order-title-row">

                                <h2 id="orderId">
                                    #NS-241120
                                </h2>

                                <span
                                    class="badge"
                                    id="orderBadge"
                                ></span>

                            </div>

                            <p id="orderSummary"></p>

                        </div>

                        <!-- KALENDER UPDATE -->

                        <div class="updated">

                            <span class="updated-icon">
                                <i data-lucide="calendar-days"></i>
                            </span>

                            <span>
                                Terakhir diperbarui

                                <strong id="orderUpdated"></strong>
                            </span>

                        </div>

                    </section>

                    <!-- ======================================
                         PANEL DINAMIS
                    ======================================= -->

                    <div
                        class="workspace-content"
                        id="workspaceContent"
                    >

                        <!-- ======================================
                             STATUS 01: PESANAN DITERIMA
                        ======================================= -->

                        <section
                            class="panel received-panel"
                            id="receivedPanel"
                            hidden
                        >

                            <div class="panel-title">

                                <h2>Form pesanan</h2>

                                <p>
                                    Masukkan data customer dan perangkat
                                    yang akan diservice.
                                </p>

                            </div>

                            <!-- INFORMASI CUSTOMER -->

                            <div class="form-subheading">

                                <span>01</span>

                                <div>
                                    <strong>Informasi customer</strong>

                                    <small>
                                        Pastikan nomor WhatsApp dapat dihubungi.
                                    </small>
                                </div>

                            </div>

                            <div class="field-grid">

                                <div class="field">

                                    <label for="receivedName">
                                        Nama customer
                                    </label>

                                    <input
                                        type="text"
                                        id="receivedName"
                                        readonly
                                    >

                                </div>

                                <div class="field">

                                    <label for="receivedPhone">
                                        Nomor HP / WhatsApp
                                    </label>

                                    <input
                                        type="text"
                                        id="receivedPhone"
                                        readonly
                                    >

                                </div>

                            </div>

                            <!-- INFORMASI PERANGKAT -->

                            <div class="form-subheading">

                                <span>02</span>

                                <div>
                                    <strong>Informasi perangkat</strong>

                                    <small>
                                        Detail perangkat dan keluhan customer.
                                    </small>
                                </div>

                            </div>

                            <div class="field-grid">

                                <div class="field">

                                    <label for="receivedDevice">
                                        Model / tipe perangkat
                                    </label>

                                    <input
                                        type="text"
                                        id="receivedDevice"
                                        readonly
                                    >

                                </div>

                                <div class="field">

                                    <label for="receivedService">
                                        Jenis layanan
                                    </label>

                                    <input
                                        type="text"
                                        id="receivedService"
                                        value="Diagnosa perangkat"
                                        readonly
                                    >

                                </div>

                            </div>

                            <div class="field">

                                <label for="receivedComplaint">
                                    Deskripsi masalah
                                </label>

                                <input
                                    type="text"
                                    id="receivedComplaint"
                                    readonly
                                >

                            </div>

                            <!-- FOTO KONDISI PERANGKAT -->

                            <div class="field">

                                <label>
                                    Foto kondisi perangkat
                                </label>

                                <div class="photo-strip">

                                    <img
                                        src="{{ asset('images/layanan/ganti-layar.jpg') }}"
                                        alt="Foto kondisi perangkat"
                                    >

                                    <img
                                        src="{{ asset('images/layanan/pengecekan-umum.jpg') }}"
                                        alt="Foto pemeriksaan perangkat"
                                    >

                                </div>

                            </div>

                        </section>

                        <!-- ======================================
                             STATUS 03: DIAGNOSIS
                        ======================================= -->

                        <section
                            class="panel diagnosis-panel"
                            id="diagnosisPanel"
                            hidden
                        >

                            <div class="panel-title">

                                <h2>Form Diagnosis & Estimasi</h2>

                                <p>
                                    Hasil pemeriksaan perangkat yang akan
                                    ditampilkan ke customer.
                                </p>

                            </div>

                            <!-- SUMBER DIAGNOSIS -->

                            <div class="diagnosis-note">

                                <span class="notice-icon">
                                    <i data-lucide="eye"></i>
                                </span>

                                <div>

                                    <strong>
                                        Sumber Pengisian Form Diagnosis
                                    </strong>

                                    <small>
                                        Form diagnosis hanya dapat diisi
                                        oleh satu pihak.
                                    </small>

                                </div>

                            </div>

                            <!-- PILIH ADMIN / TEKNISI -->

                            <div class="source-options">

                                <!-- ADMIN -->

                                <button
                                    type="button"
                                    class="source-card"
                                    id="sourceAdmin"
                                >

                                    <span class="source-icon">
                                        <i data-lucide="user-round"></i>
                                    </span>

                                    <span>

                                        <strong>Admin</strong>

                                        <small
                                            id="sourceAdminText"
                                        ></small>

                                    </span>

                                    <em
                                        id="sourceAdminTag"
                                        hidden
                                    >
                                        Sudah mengisi
                                    </em>

                                </button>

                                <!-- TEKNISI -->

                                <button
                                    type="button"
                                    class="source-card"
                                    id="sourceTech"
                                >

                                    <span class="source-icon">
                                        <i data-lucide="lock"></i>
                                    </span>

                                    <span>

                                        <strong>Teknisi</strong>

                                        <small
                                            id="sourceTechText"
                                        ></small>

                                    </span>

                                    <em
                                        id="sourceTechTag"
                                        hidden
                                    >
                                        Sudah mengisi
                                    </em>

                                </button>

                            </div>

                            <!-- PESAN PENGUNCIAN -->

                            <p
                                class="lock-note"
                                id="lockNote"
                                hidden
                            ></p>

                            <!-- CATATAN DIAGNOSIS -->

                            <div class="field">

                                <label for="diagnosisNote">
                                    Catatan Diagnosis
                                </label>

                                <textarea
                                    id="diagnosisNote"
                                    rows="2"
                                    placeholder="Tuliskan hasil pemeriksaan perangkat..."
                                ></textarea>

                            </div>

                            <!-- FOTO DIAGNOSIS -->

                            <div class="field">

                                <label>
                                    Foto Kondisi Perangkat
                                </label>

                                <div class="photo-strip">

                                    <img
                                        src="{{ asset('images/layanan/ganti-layar.jpg') }}"
                                        alt="Foto kerusakan perangkat"
                                    >

                                    <img
                                        src="{{ asset('images/layanan/pengecekan-umum.jpg') }}"
                                        alt="Foto pengecekan perangkat"
                                    >

                                    <label
                                        class="photo-add"
                                        for="photoInput"
                                    >

                                        <span>
                                            <i data-lucide="image-plus"></i>
                                        </span>

                                        <small>Tambah Foto</small>

                                    </label>

                                    <input
                                        type="file"
                                        id="photoInput"
                                        accept="image/jpeg,image/png"
                                        hidden
                                    >

                                </div>

                                <small
                                    class="file-note"
                                    id="fileNote"
                                ></small>

                            </div>

                            <!-- BIAYA DAN ESTIMASI -->

                            <p class="small-section-title">
                                Biaya & Estimasi
                            </p>

                            <div class="field-grid">

                                <div class="field">

                                    <label for="diagnosisCost">
                                        Biaya Perbaikan
                                    </label>

                                    <div class="money-input">

                                        <span>Rp</span>

                                        <input
                                            type="text"
                                            id="diagnosisCost"
                                            inputmode="numeric"
                                        >

                                    </div>

                                </div>

                                <div class="field">

                                    <label for="diagnosisTime">
                                        Estimasi Waktu Perbaikan
                                    </label>

                                    <input
                                        type="text"
                                        id="diagnosisTime"
                                        placeholder="Contoh: 2–3 hari kerja"
                                    >

                                </div>

                            </div>

                            <!-- TOTAL ESTIMASI -->

                            <div class="total-box">

                                <span>
                                    Total Estimasi

                                    <small>
                                        Belum termasuk biaya tambahan
                                    </small>
                                </span>

                                <strong id="diagnosisTotal">
                                    Rp 0
                                </strong>

                            </div>

                            <!-- SIMPAN DIAGNOSIS -->

                            <div
                                class="diagnosis-actions"
                                id="diagnosisActions"
                                hidden
                            >

                                <button
                                    type="button"
                                    class="button-gold"
                                    id="saveDiagnosis"
                                >
                                    <i data-lucide="save"></i>
                                    Simpan Diagnosis
                                </button>

                            </div>

                        </section>

                        <!-- ======================================
                             STATUS 06: RINGKASAN PENYELESAIAN
                        ======================================= -->

                        <section
                            class="panel completion-panel"
                            id="completionPanel"
                            hidden
                        >

                            <div class="panel-title">

                                <h2>Ringkasan Penyelesaian</h2>

                                <p>
                                    Detail akhir pesanan yang telah selesai.
                                </p>

                            </div>

                            <div class="completion-table">

                                <div>
                                    <span>Nomor pesanan</span>
                                    <strong id="finalId"></strong>
                                </div>

                                <div>
                                    <span>Nama customer</span>
                                    <strong id="finalName"></strong>
                                </div>

                                <div>
                                    <span>Perangkat</span>
                                    <strong id="finalDevice"></strong>
                                </div>

                                <div>
                                    <span>Tanggal selesai</span>
                                    <strong id="finalDate"></strong>
                                </div>

                                <div>
                                    <span>Teknisi</span>
                                    <strong>Raka Aditya</strong>
                                </div>

                                <div>
                                    <span>Total biaya</span>
                                    <strong id="finalCost"></strong>
                                </div>

                                <div>
                                    <span>Status pembayaran</span>
                                    <strong class="paid">
                                        ✓ Lunas
                                    </strong>
                                </div>

                                <div>
                                    <span>Catatan akhir</span>

                                    <strong>
                                        Perangkat telah selesai diperbaiki
                                        dan sudah diambil customer.
                                    </strong>
                                </div>

                                <div>
                                    <span>Garansi servis</span>
                                    <strong>7 hari</strong>
                                </div>

                            </div>

                        </section>

                        <!-- ======================================
                             KONTROL UPDATE & PUBLIKASI
                        ======================================= -->

                        <section class="panel publish-panel">

                            <div class="publish-heading">

                                <span class="gear-box">
                                    <i data-lucide="settings"></i>
                                </span>

                                <div>

                                    <h2>
                                        Kontrol Update & Publikasi
                                    </h2>

                                    <p>
                                        Atur status pesanan dan pilih
                                        informasi yang ditampilkan ke customer.
                                    </p>

                                </div>

                            </div>

                            <!-- DROPDOWN STATUS ASLI FIGMA -->

                            <div class="field">

                                <label for="publishStage">
                                    Ubah status pesanan
                                </label>

                                <select id="publishStage">

                                    <option value="1">
                                        Pesanan Diterima
                                    </option>

                                    <option value="2">
                                        Pengecekan
                                    </option>

                                    <option value="3">
                                        Persetujuan
                                    </option>

                                    <option value="4">
                                        Proses Perbaikan
                                    </option>

                                    <option value="5">
                                        Siap Diambil
                                    </option>

                                    <option value="6">
                                        Selesai
                                    </option>

                                </select>

                            </div>

                            <!-- KONTEN KHUSUS STATUS 01 -->

                            <div
                                class="received-info"
                                id="receivedInfo"
                                hidden
                            >

                                <label>
                                    Konten yang ditampilkan ke customer
                                </label>

                                <p>
                                    Form pesanan sudah ditampilkan
                                    ke customer.
                                </p>

                                <div class="diagnosis-note">

                                    <span class="notice-icon">
                                        <i data-lucide="eye"></i>
                                    </span>

                                    <div>

                                        <small>
                                            Customer dapat melihat seluruh
                                            informasi yang telah diisi pada
                                            form pemesanan.
                                        </small>

                                    </div>

                                </div>

                            </div>

                            <!-- KONTEN KHUSUS STATUS 03 -->

                            <div id="diagnosisOptions" hidden>

                                <p class="small-section-title">
                                    Konten yang ditampilkan ke customer
                                </p>

                                <p class="options-description">
                                    Pilih bagian informasi yang bisa
                                    dilihat oleh customer.
                                </p>

                                <div class="option-list">

                                    <label>
                                        <input
                                            type="checkbox"
                                            checked
                                        >
                                        Hasil diagnosis
                                    </label>

                                    <label>
                                        <input
                                            type="checkbox"
                                            checked
                                        >
                                        Estimasi biaya
                                    </label>

                                    <label>
                                        <input
                                            type="checkbox"
                                            checked
                                        >
                                        Estimasi waktu
                                    </label>

                                    <label>
                                        <input
                                            type="checkbox"
                                            checked
                                        >
                                        Lampiran foto
                                    </label>

                                    <label>
                                        <input type="checkbox">
                                        Catatan internal
                                    </label>

                                </div>

                            </div>

                            <!-- PESAN CUSTOMER -->

                            <div class="field">

                                <label for="customerMessage">
                                    Pesan untuk customer (opsional)
                                </label>

                                <textarea
                                    id="customerMessage"
                                    rows="6"
                                    maxlength="500"
                                    placeholder="Tulis pesan yang akan ditampilkan ke customer..."
                                ></textarea>

                                <small class="character-count">
                                    <span id="messageLength">0</span>/500
                                </small>

                            </div>

                            <!-- PREVIEW INFORMASI CUSTOMER -->

                            <div
                                class="customer-preview"
                                id="customerPreview"
                                hidden
                            >

                                <div class="preview-title">

                                    <span>
                                        <i data-lucide="eye"></i>
                                    </span>

                                    <strong>
                                        Preview tampilan customer
                                    </strong>

                                </div>

                                <p>
                                    Customer akan melihat informasi berikut:
                                </p>

                                <ul id="previewItems"></ul>

                            </div>

                            <!-- TOMBOL AKSI -->

                            <div class="publish-actions">

                                <button
                                    type="button"
                                    class="button-outline"
                                    id="saveDraft"
                                >

                                    <i data-lucide="save"></i>
                                    Simpan Draft

                                </button>

                                <button
                                    type="button"
                                    class="button-gold"
                                    id="publishButton"
                                >

                                    <i data-lucide="check"></i>

                                    Publikasikan Status

                                    <i data-lucide="arrow-right"></i>

                                </button>

                            </div>

                        </section>

                    </div>

                </div>

            </div>

        </main>

    </div>

</div>

<!-- ======================================
     MODAL KONFIRMASI PUBLIKASI
======================================= -->

<div
    class="modal-backdrop"
    id="publishModal"
    hidden
>

    <div
        class="modal"
        role="dialog"
        aria-modal="true"
        aria-labelledby="publishModalTitle"
    >

        <div class="modal-header">

            <h3 id="publishModalTitle">
                Konfirmasi Publikasi Status
            </h3>

            <button
                type="button"
                id="closeModal"
                aria-label="Tutup"
            >
                <i data-lucide="x"></i>
            </button>

        </div>

        <div class="modal-body">

            <span class="modal-symbol">!</span>

            <h3>
                Publikasikan perubahan status?
            </h3>

            <p>
                Status pesanan
                <strong id="modalOrder"></strong>

                akan diperbarui menjadi

                <strong id="modalStage"></strong>.
            </p>

            <p class="modal-warning">
                Pastikan data pesanan dan informasi customer
                sudah benar sebelum melanjutkan.
            </p>

        </div>

        <div class="modal-actions">

            <button
                type="button"
                class="button-outline"
                id="cancelPublish"
            >
                Kembali
            </button>

            <button
                type="button"
                class="button-gold"
                id="confirmPublish"
            >
                <i data-lucide="check"></i>
                Ya, Publikasikan
            </button>

        </div>

    </div>

</div>

<!-- ======================================
     MODAL SUKSES PUBLIKASI
======================================= -->
<div id="publishSuccessModal"
     class="publish-success-backdrop"
     role="dialog"
     aria-modal="true"
     aria-labelledby="successModalTitle"
     aria-describedby="successModalDescription"
     hidden>

    <div class="publish-success-card">
        <button type="button"
                id="closeSuccessModal"
                class="publish-success-close"
                aria-label="Tutup notifikasi">
            <i data-lucide="x"></i>
        </button>

        <div class="publish-success-graphic" aria-hidden="true">
            <div class="publish-success-ring">
                <i data-lucide="check"></i>
            </div>
            <span class="publish-success-spark"></span>
            <span class="publish-success-spark"></span>
            <span class="publish-success-spark"></span>
            <span class="publish-success-spark"></span>
            <span class="publish-success-spark"></span>
            <span class="publish-success-spark"></span>
            <span class="publish-success-spark"></span>
            <span class="publish-success-spark"></span>
        </div>

        <h2 id="successModalTitle">Status berhasil dipublikasikan!</h2>
        <p class="publish-success-description" id="successModalDescription">
            Update status <strong id="successPublishedStage">Selesai</strong>
            berhasil disimpan pada simulasi tracking pesanan.
        </p>

        <div class="publish-success-actions">
            <a href="{{ route('admin.pesanan') }}" class="publish-success-link">
                Lihat Pesanan
            </a>
            <button type="button" id="successDoneButton" class="publish-success-done">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- NOTIFIKASI -->
<div
    class="toast"
    id="toast"
    role="status"
    aria-live="polite"
    hidden
></div>

<!-- ======================================
     JAVASCRIPT
======================================= -->

<script>
document.addEventListener('DOMContentLoaded', function () {

    const $ = id => document.getElementById(id);

    const KEY = 'nayla-admin-status-v4';

    // =====================================
    // DAFTAR STATUS
    // =====================================

    const stageNames = {
        1: 'Pesanan Diterima',
        2: 'Pengecekan',
        3: 'Persetujuan',
        4: 'Proses Perbaikan',
        5: 'Siap Diambil',
        6: 'Selesai'
    };

    const messages = {
        1: 'Pesanan telah kami terima dan akan segera diproses oleh tim admin.',
        2: '',
        3: 'Hasil diagnosis dan estimasi biaya perbaikan perangkat Anda sudah kami siapkan. Silakan cek detailnya dan lakukan persetujuan.',
        4: 'Perbaikan perangkat sedang berlangsung. Tim teknisi kami sedang melakukan perbaikan sesuai hasil diagnosis.',
        5: 'Perangkat Anda sudah selesai diperbaiki dan siap diambil.',
        6: ''
    };

    // =====================================
    // DATA PESANAN DEMO
    // =====================================

    const originalOrders = [
        {
            id: 'NS-241120',
            name: 'Cindy',
            phone: '0812 3456 7890',
            device: 'iPhone 13 Pro',
            received: '18 Nov 2024',
            updated: '18 Nov 2024, 14:30',
            completed: '21 November 2024',
            complaint: 'Layar bergaris warna hijau setelah HP terjatuh. Touchscreen masih berfungsi normal.',
            stage: 3,
            cancelled: false,
            message: 'Halo Cindy, hasil diagnosis dan estimasi biaya perbaikan perangkat Anda sudah kami siapkan. Silakan cek detailnya di bawah ini dan lakukan persetujuan agar proses perbaikan dapat kami lanjutkan.',
            diagnosis: {
                owner: 'teknisi',
                note: 'Diduga kerusakan pada panel/layar (LCD/OLED). Disarankan penggantian layar.',
                cost: 2650000,
                time: '2–3 hari kerja'
            }
        },
        {
            id: 'NS-241107',
            name: 'Rafi Maulana',
            phone: '0813 9876 1122',
            device: 'Samsung S23',
            received: '18 Nov 2024',
            updated: '18 Nov 2024, 16:20',
            completed: '21 November 2024',
            complaint: 'Baterai cepat habis.',
            stage: 4,
            cancelled: false,
            message: messages[4],
            diagnosis: {
                owner: 'admin',
                note: 'Baterai perlu diganti.',
                cost: 850000,
                time: '2 hari kerja'
            }
        },
        {
            id: 'NS-241106',
            name: 'Kevin Wijaya',
            phone: '0812 2222 3333',
            device: 'Xiaomi 13T',
            received: '17 Nov 2024',
            updated: '20 Nov 2024, 10:15',
            completed: '21 November 2024',
            complaint: 'Port charger rusak.',
            stage: 5,
            cancelled: false,
            message: messages[5],
            diagnosis: {
                owner: 'teknisi',
                note: 'Penggantian port charger.',
                cost: 350000,
                time: '1 hari kerja'
            }
        },
        {
            id: 'NS-241105',
            name: 'Salsa Putri',
            phone: '0812 4444 5555',
            device: 'iPhone 11',
            received: '17 Nov 2024',
            updated: '21 Nov 2024, 15:30',
            completed: '21 November 2024',
            complaint: 'LCD rusak.',
            stage: 6,
            cancelled: false,
            message: '',
            diagnosis: {
                owner: 'admin',
                note: 'Penggantian LCD selesai.',
                cost: 800000,
                time: '2 hari kerja'
            }
        },
        {
            id: 'NS-241104',
            name: 'Arga Pratama',
            phone: '0812 6666 7777',
            device: 'Oppo Reno 10',
            received: '16 Nov 2024',
            updated: '18 Nov 2024, 09:00',
            completed: '21 November 2024',
            complaint: 'Kamera tidak berfungsi.',
            stage: 3,
            cancelled: true,
            message: 'Pesanan dibatalkan.',
            diagnosis: {
                owner: 'admin',
                note: 'Pemeriksaan kamera.',
                cost: 450000,
                time: '2 hari kerja'
            }
        }
    ];

    // =====================================
    // HELPER
    // =====================================

    function escapeHTML(value) {
        return String(value ?? '')
            .replaceAll('&', '&amp;')
            .replaceAll('<', '&lt;')
            .replaceAll('>', '&gt;')
            .replaceAll('"', '&quot;')
            .replaceAll("'", '&#39;');
    }

    function rupiah(value) {
        return 'Rp ' +
            Number(value || 0).toLocaleString('id-ID');
    }

    function angka(value) {
        return Number(
            String(value).replace(/\D/g, '') || '0'
        );
    }

    // =====================================
    // LOCAL STORAGE
    // =====================================

    let orders = JSON.parse(
        JSON.stringify(originalOrders)
    );

    try {
        const saved = JSON.parse(
            localStorage.getItem(KEY)
        );

        if (
            Array.isArray(saved) &&
            saved.length === originalOrders.length &&
            saved.every(order => order.id && order.diagnosis)
        ) {
            orders = saved;
        }
    } catch (error) {
        // Tetap gunakan data demo.
    }

    let selectedId = 'NS-241120';
    let selectedStage = 3;
    let selectedSource = 'admin';
    let filterActive = false;

    function currentOrder() {
        return orders.find(
            order => order.id === selectedId
        );
    }

    function persist() {
        try {
            localStorage.setItem(
                KEY,
                JSON.stringify(orders)
            );

            return true;
        } catch (error) {
            showToast(
                'Penyimpanan browser tidak tersedia.',
                true
            );

            return false;
        }
    }

    // =====================================
    // TOAST
    // =====================================

    function showToast(message, error = false) {
        const toast = $('toast');

        toast.textContent = message;
        toast.classList.toggle('error', error);
        toast.hidden = false;

        clearTimeout(showToast.timeout);

        showToast.timeout = setTimeout(() => {
            toast.hidden = true;
        }, 3500);
    }

    // =====================================
    // LABEL STATUS
    // =====================================

    function labelOrder(order) {
        return order.cancelled
            ? 'Dibatalkan'
            : stageNames[order.stage];
    }

    // =====================================
    // RENDER ANTREAN
    // =====================================

    function renderQueue() {
        const query = $('queueSearch')
            .value.toLowerCase().trim();

        const filtered = orders.filter(order => {
            const text = (
                order.id + ' ' +
                order.name + ' ' +
                order.device
            ).toLowerCase();

            return (
                text.includes(query) &&
                (!filterActive || !order.cancelled)
            );
        });

        $('queueCount').textContent = filtered.length;
        $('queueEmpty').hidden = filtered.length > 0;

        $('queueList').innerHTML = filtered.map(order => {
            const active = order.id === selectedId;

            return `
                <button
                    type="button"
                    class="queue-item ${active ? 'active' : ''}"
                    data-id="${escapeHTML(order.id)}"
                >

                    <span class="queue-item-top">

                        <strong>
                            #${escapeHTML(order.id)}
                        </strong>

                        <em class="badge-small ${
                            order.cancelled
                                ? 'cancelled'
                                : 'stage-' + order.stage
                        }">
                            ◆ ${escapeHTML(labelOrder(order))}
                        </em>

                    </span>

                    <span>
                        ${escapeHTML(order.name)}
                    </span>

                    <small>
                        ${escapeHTML(order.device)}
                    </small>

                    <small>
                        ${escapeHTML(order.received)}
                    </small>

                    <span class="queue-chevron">
                        <i data-lucide="chevron-right"></i>
                    </span>

                </button>
            `;
        }).join('');

        // Render ikon antrean setelah HTML dibuat.
        if (window.lucide) {
            lucide.createIcons({
                nodes: [
                    $('queueList')
                ]
            });
        }
    }

    // =====================================
    // TIMELINE
    // =====================================

    function renderTimeline() {
        // Enam titik pada enam kolom.
        $('timelineFill').style.width =
            ((selectedStage - 1) / 6 * 100) + '%';

        document.querySelectorAll('.timeline-step')
            .forEach(item => {
                const number = Number(
                    item.dataset.step
                );

                item.classList.toggle(
                    'complete',
                    number < selectedStage
                );

                item.classList.toggle(
                    'current',
                    number === selectedStage
                );

                item.querySelector(
                    '.step-circle'
                ).textContent =
                    number < selectedStage
                        ? '✓'
                        : number;
            });
    }

    // =====================================
    // IDENTITAS PESANAN
    // =====================================

    function renderIdentity() {
        const order = currentOrder();

        $('orderId').textContent =
            '#' + order.id;

        $('orderSummary').textContent =
            order.name + ' · ' +
            order.device + ' · ' +
            order.phone;

        $('orderUpdated').textContent =
            order.updated;

        $('orderBadge').textContent =
            '◆ ' + (
                order.cancelled
                    ? 'Dibatalkan'
                    : stageNames[selectedStage]
            );

        $('orderBadge').className =
            'badge ' + (
                order.cancelled
                    ? 'cancelled'
                    : 'stage-' + selectedStage
            );
    }

    // =====================================
    // FORM PESANAN STATUS 01
    // =====================================

    function renderReceived() {
        const order = currentOrder();

        $('receivedName').value =
            order.name;

        $('receivedPhone').value =
            order.phone;

        $('receivedDevice').value =
            order.device;

        $('receivedComplaint').value =
            order.complaint;
    }

    // =====================================
    // FORM DIAGNOSIS STATUS 03
    // =====================================

    function renderDiagnosis() {
        const order = currentOrder();
        const diagnosis = order.diagnosis;
        const owner = diagnosis.owner;

        if (owner) {
            selectedSource = owner;
        }

        $('sourceAdmin').classList.toggle(
            'chosen',
            selectedSource === 'admin'
        );

        $('sourceTech').classList.toggle(
            'chosen',
            selectedSource === 'teknisi'
        );

        $('sourceAdminTag').hidden =
            owner !== 'admin';

        $('sourceTechTag').hidden =
            owner !== 'teknisi';

        $('sourceAdminText').textContent =
            owner === 'admin'
                ? 'Form telah diisi oleh admin'
                : owner === 'teknisi'
                    ? 'Terkunci karena teknisi sudah mengisi'
                    : 'Form dapat diisi admin';

        $('sourceTechText').textContent =
            owner === 'teknisi'
                ? 'Form telah dikirim oleh teknisi'
                : owner === 'admin'
                    ? 'Terkunci karena admin sudah mengisi'
                    : 'Menunggu pengisian teknisi';

        // Diagnosis terkunci jika sudah ada pengisi.
        $('sourceAdmin').disabled = Boolean(owner);
        $('sourceTech').disabled = Boolean(owner);

        $('diagnosisNote').value =
            diagnosis.note || '';

        $('diagnosisCost').value =
            Number(
                diagnosis.cost || 0
            ).toLocaleString('id-ID');

        $('diagnosisTime').value =
            diagnosis.time || '';

        $('diagnosisTotal').textContent =
            rupiah(diagnosis.cost);

        const canEdit =
            !owner &&
            selectedSource === 'admin' &&
            !order.cancelled;

        $('diagnosisNote').readOnly = !canEdit;
        $('diagnosisCost').readOnly = !canEdit;
        $('diagnosisTime').readOnly = !canEdit;
        $('photoInput').disabled = !canEdit;

        $('diagnosisActions').hidden = !canEdit;

        $('lockNote').hidden = !owner;

        if (owner) {
            $('lockNote').textContent =
                'Diagnosis sudah disimpan oleh ' +
                (
                    owner === 'admin'
                        ? 'Admin'
                        : 'Teknisi'
                ) +
                '. Form terkunci agar tidak diisi ulang oleh pihak lain.';
        }
    }

    // =====================================
    // RINGKASAN PENYELESAIAN
    // =====================================

    function renderCompletion() {
        const order = currentOrder();

        $('finalId').textContent =
            '#' + order.id;

        $('finalName').textContent =
            order.name;

        $('finalDevice').textContent =
            order.device;

        $('finalDate').textContent =
            order.completed ||
            '21 November 2024';

        $('finalCost').textContent =
            rupiah(order.diagnosis.cost);
    }

    // =====================================
    // PREVIEW INFORMASI CUSTOMER
    // =====================================

    function renderPreview() {
        const selected = [
            ...document.querySelectorAll(
                '.option-list input:checked'
            )
        ].map(input =>
            input.parentElement.textContent.trim()
        );

        $('previewItems').innerHTML =
            selected.map(item =>
                '<li>' +
                escapeHTML(item) +
                '</li>'
            ).join('');
    }

    // =====================================
    // PANEL BERDASARKAN STATUS
    // =====================================

    function renderWorkspace() {
        const order = currentOrder();

        $('publishStage').value =
            String(selectedStage);

        renderIdentity();
        renderReceived();
        renderDiagnosis();
        renderCompletion();

        // Tahap 01: Form Pesanan
        $('receivedPanel').hidden =
            selectedStage !== 1;

        // Tahap 03: Diagnosis
        $('diagnosisPanel').hidden =
            selectedStage !== 3;

        // Tahap 06: Ringkasan
        $('completionPanel').hidden =
            selectedStage !== 6;

        // Konten khusus tahap 01
        $('receivedInfo').hidden =
            selectedStage !== 1;

        // Konten khusus tahap 03
        $('diagnosisOptions').hidden =
            selectedStage !== 3;

        $('customerPreview').hidden =
            selectedStage !== 3;

        // Panel lebar untuk tahap 02, 04, 05
        $('workspaceContent').classList.toggle(
            'wide',
            [2, 4, 5].includes(selectedStage)
        );

        // Pesan sesuai status yang dipilih
        $('customerMessage').value =
            selectedStage === order.stage
                ? (
                    order.message ??
                    messages[selectedStage]
                )
                : messages[selectedStage];

        $('messageLength').textContent =
            $('customerMessage').value.length;

        renderPreview();

        // Pesanan dibatalkan tidak bisa dipublikasikan
        $('publishButton').disabled =
            order.cancelled;

        $('saveDraft').disabled =
            order.cancelled;
    }

    function renderAll() {
        renderQueue();
        renderTimeline();
        renderWorkspace();
    }

    // =====================================
    // PILIH PESANAN
    // =====================================

    $('queueList').addEventListener(
        'click',
        event => {
            const button =
                event.target.closest('[data-id]');

            if (!button) return;

            selectedId = button.dataset.id;

            selectedStage =
                currentOrder().stage;

            selectedSource = 'admin';

            renderAll();
        }
    );

    // =====================================
    // PENCARIAN
    // =====================================

    $('queueSearch').addEventListener(
        'input',
        renderQueue
    );

    // =====================================
    // FILTER ANTREAN
    // =====================================

    $('filterButton').addEventListener(
        'click',
        function () {
            filterActive = !filterActive;

            this.classList.toggle(
                'on',
                filterActive
            );

            this.setAttribute(
                'aria-pressed',
                String(filterActive)
            );

            renderQueue();
        }
    );

    // =====================================
    // DROPDOWN FIGMA 01–06
    // =====================================

    $('publishStage').addEventListener(
        'change',
        event => {
            selectedStage = Number(
                event.target.value
            );

            renderTimeline();
            renderWorkspace();
        }
    );

    // =====================================
    // SUMBER DIAGNOSIS ADMIN
    // =====================================

    $('sourceAdmin').addEventListener(
        'click',
        () => {
            if (
                currentOrder().diagnosis.owner
            ) return;

            selectedSource = 'admin';

            renderDiagnosis();
        }
    );

    // =====================================
    // SUMBER DIAGNOSIS TEKNISI
    // =====================================

    $('sourceTech').addEventListener(
        'click',
        () => {
            if (
                currentOrder().diagnosis.owner
            ) return;

            selectedSource = 'teknisi';

            renderDiagnosis();
        }
    );

    // =====================================
    // FORMAT BIAYA
    // =====================================

    $('diagnosisCost').addEventListener(
        'input',
        event => {
            const value = angka(
                event.target.value
            );

            event.target.value =
                value.toLocaleString('id-ID');

            $('diagnosisTotal').textContent =
                rupiah(value);
        }
    );

    // =====================================
    // SIMPAN DIAGNOSIS ADMIN
    // =====================================

    $('saveDiagnosis').addEventListener(
        'click',
        () => {
            const order = currentOrder();

            if (order.diagnosis.owner) {
                showToast(
                    'Diagnosis sudah terkunci.',
                    true
                );
                return;
            }

            if (selectedSource !== 'admin') {
                showToast(
                    'Diagnosis harus diisi oleh Admin.',
                    true
                );
                return;
            }

            const note =
                $('diagnosisNote').value.trim();

            const cost =
                angka($('diagnosisCost').value);

            const time =
                $('diagnosisTime').value.trim();

            if (!note || !time) {
                showToast(
                    'Catatan diagnosis dan estimasi waktu wajib diisi.',
                    true
                );
                return;
            }

            order.diagnosis = {
                owner: 'admin',
                note,
                cost,
                time
            };

            persist();
            renderDiagnosis();

            showToast(
                'Diagnosis disimpan oleh Admin. Form terkunci.'
            );
        }
    );

    // =====================================
    // UPLOAD FOTO DEMO
    // =====================================

    $('photoInput').addEventListener(
        'change',
        event => {
            const file = event.target.files[0];

            $('fileNote').textContent =
                file
                    ? 'Dipilih: ' +
                      file.name +
                      ' (belum diunggah ke server)'
                    : '';
        }
    );

    // =====================================
    // CHECKBOX INFORMASI CUSTOMER
    // =====================================

    document.querySelectorAll(
        '.option-list input'
    ).forEach(input => {
        input.addEventListener(
            'change',
            renderPreview
        );
    });

    // =====================================
    // JUMLAH KARAKTER PESAN
    // =====================================

    $('customerMessage').addEventListener(
        'input',
        () => {
            $('messageLength').textContent =
                $('customerMessage').value.length;
        }
    );

    // =====================================
    // SIMPAN DRAFT
    // =====================================

    $('saveDraft').addEventListener(
        'click',
        () => {
            const order = currentOrder();

            order.draft = {
                stage: selectedStage,
                message: $('customerMessage').value
            };

            if (persist()) {
                showToast(
                    'Draft disimpan di browser.'
                );
            }
        }
    );

    // =====================================
    // MODAL KONFIRMASI
    // =====================================

    let lastFocusedElement = null;

    function openPublishModal() {
        const order = currentOrder();

        if (order.cancelled) {
            showToast(
                'Pesanan dibatalkan.',
                true
            );
            return;
        }

        // Tahap 03 harus memiliki hasil diagnosis.
        if (
            selectedStage === 3 &&
            !order.diagnosis.owner
        ) {
            showToast(
                'Diagnosis harus disimpan sebelum publikasi.',
                true
            );
            return;
        }

        // Tidak boleh melompati tahapan.
        if (
            selectedStage > order.stage + 1
        ) {
            showToast(
                'Publikasikan status secara berurutan.',
                true
            );
            return;
        }

        lastFocusedElement =
            document.activeElement;

        $('modalOrder').textContent =
            '#' + order.id;

        $('modalStage').textContent =
            stageNames[selectedStage];

        $('publishModal').hidden = false;

        $('closeModal').focus();
    }

    function closePublishModal() {
        $('publishModal').hidden = true;

        if (lastFocusedElement) {
            lastFocusedElement.focus();
        }
    }

    $('publishButton').addEventListener(
        'click',
        openPublishModal
    );

    $('closeModal').addEventListener(
        'click',
        closePublishModal
    );

    $('cancelPublish').addEventListener(
        'click',
        closePublishModal
    );

    $('publishModal').addEventListener(
        'click',
        event => {
            if (
                event.target === $('publishModal')
            ) {
                closePublishModal();
            }
        }
    );

    document.addEventListener(
        'keydown',
        event => {
            if (
                event.key === 'Escape' &&
                !$('publishModal').hidden
            ) {
                closePublishModal();
            }
        }
    );

    // =====================================
    // NOTIFIKASI SUKSES PUBLIKASI
    // =====================================

    let focusBeforeSuccess = null;

    function showPublishSuccess(stageName) {
        focusBeforeSuccess = document.activeElement;
        $('successPublishedStage').textContent = stageName;
        $('publishSuccessModal').hidden = false;
        document.body.classList.add('modal-open');

        if (window.lucide) {
            lucide.createIcons();
        }
        $('successDoneButton').focus();
    }

    function closePublishSuccess() {
        $('publishSuccessModal').hidden = true;
        document.body.classList.remove('modal-open');
        if (focusBeforeSuccess && focusBeforeSuccess.isConnected) {
            focusBeforeSuccess.focus();
        }
    }

    $('closeSuccessModal').addEventListener('click', closePublishSuccess);
    $('successDoneButton').addEventListener('click', closePublishSuccess);
    $('publishSuccessModal').addEventListener('click', event => {
        if (event.target === $('publishSuccessModal')) {
            closePublishSuccess();
        }
    });
    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && !$('publishSuccessModal').hidden) {
            closePublishSuccess();
        }
    });

    // =====================================
    // KONFIRMASI PUBLIKASI
    // =====================================

    $('confirmPublish').addEventListener(
        'click',
        () => {
            const order = currentOrder();
            const previousOrder = JSON.parse(JSON.stringify(order));

            order.stage = selectedStage;

            order.message =
                $('customerMessage').value.trim();

            order.updated =
                new Date().toLocaleString('id-ID');

            order.visible = [
                ...document.querySelectorAll(
                    '.option-list input'
                )
            ].map(input => input.checked);

            delete order.draft;

            const saved = persist();

            if (!saved) {
                // Jangan tampilkan sukses ketika penyimpanan gagal.
                Object.assign(order, previousOrder);
                return;
            }

            closePublishModal();
            renderAll();
            showPublishSuccess(stageNames[selectedStage]);
        }
    );

    // =====================================
    // SIDEBAR MOBILE
    // =====================================

    $('mobileToggle').addEventListener(
        'click',
        () => {
            $('sidebar').classList.toggle(
                'open'
            );
        }
    );

    // =====================================
    // RENDER AWAL
    // =====================================

    renderAll();

    // Inisialisasi ikon setelah halaman siap.
    // Script Lucide dimuat dengan atribut defer.
    function initializeIcons() {
        if (window.lucide) {
            lucide.createIcons();
        }
    }

    if (window.lucide) {
        initializeIcons();
    } else {
        window.addEventListener(
            'load',
            initializeIcons,
            { once: true }
        );
    }

});
</script>

</body>
</html>