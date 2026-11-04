<section id="cek-status" class="status-section">
    <div class="main">

    <!-- JUDUL -->
    <section class="heading">
        <p class="eyebrow">TRACKING SERVICE</p>

        <h1>Cek progres perangkatmu.</h1>

        <p class="heading-desc">
            Masukkan nomor pesanan yang telah diterima.
        </p>
    </section>

    <!-- FORM NOMOR PESANAN -->
    <form class="search-card" id="searchForm">
        <label for="orderInput">Nomor Pesanan</label>

        <div class="search-row">
            <input
                type="text"
                id="orderInput"
                value="NS-241120"
                placeholder="Contoh: NS-241120"
                autocomplete="off"
                required
            >

            <button type="submit">
                Cek Status
                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14m-6-6 6 6-6 6"/>
                </svg>
            </button>
        </div>

        <small>
            Nomor pesanan terdiri dari kombinasi huruf dan angka pada bukti booking.
        </small>

        <p class="search-error" id="searchError" hidden></p>
    </form>

    <!-- PEMILIH TAHAP KHUSUS DEMO -->
    <div class="demo-toolbar" id="demoToolbar" hidden>

        <div>
            <strong>Mode Preview</strong>
            <span>Uji tampilan setiap tahap status pesanan</span>
        </div>

        <div class="demo-controls">
            <select id="demoStage" aria-label="Pilih tahap demo">
                <option value="1">01 · Pesanan Diterima</option>
                <option value="2">02 · Pengecekan</option>
                <option value="3">03 · Persetujuan</option>
                <option value="4">04 · Proses</option>
                <option value="5">05 · Siap Diambil</option>
                <option value="6">06 · Selesai</option>
            </select>

            <button type="button" id="resetDemo">
                Reset
            </button>
        </div>
    </div>

    <!-- HASIL CEK STATUS -->
    <div id="result" hidden>

        <!-- STATUS UTAMA -->
        <section class="status-card">

            <div class="status-heading">
                <div class="status-title">
                    <p class="eyebrow" id="statusLabel">
                        STATUS DITEMUKAN
                    </p>

                    <h2 id="statusTitle">
                        Pesanan diterima.
                    </h2>

                    <p id="statusDescription"></p>
                </div>

                <div class="order-number">
                    <small>NOMOR PESANAN</small>
                    <strong>#NS-241120</strong>
                </div>
            </div>

            <div class="order-meta">
                <div>
                    <small>PERANGKAT</small>
                    <strong>iPhone 13 Pro</strong>
                </div>

                <div>
                    <small>TANGGAL MASUK</small>
                    <strong>18 November 2024</strong>
                </div>
            </div>

            <!-- TIMELINE -->
            <div class="timeline" id="timeline">

                <div class="step" data-step="1">
                    <div class="step-dot">01</div>
                    <strong>Pesanan Diterima</strong>
                    <small>Pesanan diterima</small>
                </div>

                <div class="step" data-step="2">
                    <div class="step-dot">02</div>
                    <strong>Pengecekan</strong>
                    <small>Pengecekan teknisi</small>
                </div>

                <div class="step" data-step="3">
                    <div class="step-dot">03</div>
                    <strong>Persetujuan</strong>
                    <small>Menunggu persetujuan</small>
                </div>

                <div class="step" data-step="4">
                    <div class="step-dot">04</div>
                    <strong>Proses</strong>
                    <small>Perbaikan berlangsung</small>
                </div>

                <div class="step" data-step="5">
                    <div class="step-dot">05</div>
                    <strong>Siap Diambil</strong>
                    <small>Perangkat siap diambil</small>
                </div>

                <div class="step" data-step="6">
                    <div class="step-dot">06</div>
                    <strong>Selesai</strong>
                    <small>Pesanan selesai</small>
                </div>

            </div>

        </section>

        <!-- ===================================
             TAHAP 01: PESANAN DITERIMA
        ==================================== -->
        <section class="detail-card split-card"
                 data-detail-stage="1">

            <div class="detail-aside">
                <div class="big-icon">
                    <svg viewBox="0 0 24 24">
                        <rect x="7" y="4" width="10" height="17" rx="1.5"/>
                        <rect x="9" y="2" width="6" height="4" rx="1"/>
                        <path d="m9.5 13 2 2 3.5-4M10 18h4"/>
                    </svg>
                </div>

                <h3>Hasil Form Pesanan</h3>

                <p>
                    Data pesanan dari customer telah diterima
                    dan sedang diproses oleh tim kami.
                </p>
            </div>

            <div class="detail-content">

                <div class="form-grid">

                    <div class="readonly-field">
                        <label>Nama customer</label>
                        <div>Dinda Aulia</div>
                    </div>

                    <div class="readonly-field">
                        <label>Nomor HP / WhatsApp</label>
                        <div>0812 2465 7890</div>
                    </div>

                    <div class="readonly-field">
                        <label>Model / tipe perangkat</label>
                        <div>iPhone 13 Pro</div>
                    </div>

                    <div class="readonly-field">
                        <label>Jenis layanan</label>
                        <div>Diagnosa perangkat</div>
                    </div>

                    <div class="readonly-field full">
                        <label>Deskripsi masalah</label>
                        <div>
                            Layar bergaris warna hijau setelah HP terjatuh.
                            Touchscreen masih berfungsi normal.
                        </div>
                    </div>

                </div>

                <button type="button"
                        class="photo-attachment"
                        id="customerPhotoButton">

                    <span class="photo-thumbnail">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <circle cx="8" cy="8" r="1.5"/>
                            <path d="m3 18 6-6 4 4 3-3 5 5"/>
                        </svg>
                    </span>

                    <span class="photo-copy">
                        <strong>Foto kondisi perangkat</strong>
                        <small>IMG_248.JPG · 3.2 MB</small>
                    </span>

                    <span class="photo-action">
                        Lihat foto
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>
                    </span>
                </button>

            </div>
        </section>

        <!-- ===================================
             TAHAP 02: PENGECEKAN
        ==================================== -->
        <section class="detail-card inspection-card"
                 data-detail-stage="2" hidden>

            <div class="inspection-visual">
                <div class="inspection-art">
                    <img
                        src="{{ asset('images/layanan/pengecekan-umum.jpg') }}"
                        alt="Teknisi melakukan pengecekan perangkat"
                    >
                </div>

                <span class="visual-zoom">
                    <svg viewBox="0 0 24 24">
                        <circle cx="10.5" cy="10.5" r="6.5"/>
                        <path d="m16 16 5 5"/>
                    </svg>
                </span>
            </div>

            <div class="inspection-text">
                <p class="eyebrow">PENGECEKAN PERANGKAT</p>

                <h3>
                    Perangkat sedang dalam tahap pengecekan teknisi.
                </h3>

                <p>
                    Hasil diagnosis dan estimasi biaya akan ditampilkan
                    setelah pemeriksaan selesai.
                </p>
            </div>
        </section>

        <!-- ===================================
             TAHAP 03: PERSETUJUAN
        ==================================== -->
        <section class="detail-card split-card"
                 data-detail-stage="3" hidden>

            <div class="detail-aside">
                <div class="big-icon">
                    <svg viewBox="0 0 24 24">
                        <rect x="7" y="4" width="10" height="17" rx="1.5"/>
                        <rect x="9" y="2" width="6" height="4" rx="1"/>
                        <path d="m9.5 13 2 2 3.5-4M10 18h4"/>
                    </svg>
                </div>

                <h3>Persetujuan Perbaikan</h3>

                <p>
                    Teknisi telah menyelesaikan diagnosis
                    perangkat dan mengirimkan estimasi biaya.
                </p>
            </div>

            <div class="detail-content approval-content">

                <div class="form-grid">

                    <div class="readonly-field">
                        <label>Model / Tipe Perangkat</label>
                        <div>iPhone 13 Pro</div>
                    </div>

                    <div class="readonly-field">
                        <label>Tanggal Masuk</label>
                        <div>18 November 2024</div>
                    </div>

                    <div class="readonly-field full">
                        <label>Keluhan Customer</label>
                        <div>
                            Layar bergaris warna hijau setelah HP terjatuh.
                        </div>
                    </div>

                    <div class="readonly-field full">
                        <label>Hasil Diagnosis</label>
                        <div>
                            Kerusakan pada panel layar (LCD/OLED).
                            Disarankan penggantian layar.
                        </div>
                    </div>

                    <div class="readonly-field">
                        <label>Biaya Perbaikan</label>
                        <div>Rp 2.650.000</div>
                    </div>

                    <div class="readonly-field">
                        <label>Estimasi Waktu Perbaikan</label>
                        <div>2–3 hari kerja</div>
                    </div>

                </div>

                <div class="total-box">
                    <div>
                        <strong>Total Estimasi</strong>
                        <span>Belum termasuk biaya tambahan</span>
                    </div>

                    <strong>Rp 2.650.000</strong>
                </div>

                <div class="approval-actions">
                    <button type="button"
                            class="button-outline"
                            id="rejectButton">
                        Batalkan
                    </button>

                    <button type="button"
                            class="button-gold"
                            id="approveButton">
                        Lanjutkan
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>
                    </button>
                </div>

                <p class="action-message"
                   id="approvalMessage"
                   role="status"
                   hidden></p>

            </div>
        </section>

        <!-- ===================================
             TAHAP 04: PROSES PERBAIKAN
        ==================================== -->
        <section class="detail-card split-card"
                 data-detail-stage="4" hidden>

            <div class="detail-aside">
                <div class="big-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M14.5 6.5a5 5 0 0 0-6.7 6.7L3 18l3 3 4.8-4.8a5 5 0 0 0 6.7-6.7L14 13l-3-3z"/>
                    </svg>
                </div>

                <h3>Proses Perbaikan</h3>

                <p>
                    Perbaikan perangkat sedang berlangsung
                    sesuai persetujuan dan estimasi teknisi.
                </p>
            </div>

            <div class="detail-content">
                <p class="eyebrow">PERBAIKAN BERLANGSUNG</p>

                <h3 class="section-title">
                    Perangkatmu sedang diperbaiki.
                </h3>

                <p class="section-description">
                    Teknisi sedang melakukan penggantian komponen
                    dan pemeriksaan fungsi perangkat.
                </p>

                <div class="form-grid info-spacing">
                    <div class="readonly-field">
                        <label>Perangkat</label>
                        <div>iPhone 13 Pro</div>
                    </div>

                    <div class="readonly-field">
                        <label>Estimasi Waktu</label>
                        <div>2–3 hari kerja</div>
                    </div>

                    <div class="readonly-field full">
                        <label>Tindakan Perbaikan</label>
                        <div>Penggantian panel layar (LCD/OLED)</div>
                    </div>
                </div>

                <div class="inline-notice">
                    Kami akan memperbarui status setelah perbaikan selesai.
                </div>
            </div>
        </section>

        <!-- ===================================
             TAHAP 05: SIAP DIAMBIL
        ==================================== -->
        <section class="detail-card split-card"
                 data-detail-stage="5" hidden>

            <div class="detail-aside">
                <div class="big-icon">
                    <svg viewBox="0 0 24 24">
                        <rect x="4" y="5" width="16" height="15" rx="2"/>
                        <path d="M8 5V3M16 5V3M4 10h16m-12 5 3 3 5-5"/>
                    </svg>
                </div>

                <h3>Siap Diambil</h3>

                <p>
                    Perangkat telah selesai diperbaiki dan
                    siap diserahkan kepada customer.
                </p>
            </div>

            <div class="detail-content">
                <p class="eyebrow">PERANGKAT SIAP</p>

                <h3 class="section-title">
                    Perangkatmu sudah siap diambil.
                </h3>

                <p class="section-description">
                    Silakan hubungi pihak Nayla Service untuk
                    mengonfirmasi jadwal pengambilan perangkat.
                </p>

                <div class="form-grid info-spacing">
                    <div class="readonly-field">
                        <label>Nomor Pesanan</label>
                        <div>NS-241120</div>
                    </div>

                    <div class="readonly-field">
                        <label>Perangkat</label>
                        <div>iPhone 13 Pro</div>
                    </div>

                    <div class="readonly-field full">
                        <label>Status Perbaikan</label>
                        <div>Perbaikan dan pemeriksaan akhir selesai</div>
                    </div>
                </div>

                <div class="inline-notice">
                    Simpan nomor pesanan untuk proses pengambilan.
                </div>
            </div>
        </section>

        <!-- ===================================
             TAHAP 06: SELESAI
        ==================================== -->
        <section class="detail-card split-card"
                 data-detail-stage="6" hidden>

            <div class="detail-aside">
                <div class="big-icon success-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="m8 12 3 3 5-6"/>
                    </svg>
                </div>

                <h3>Pesanan Selesai</h3>

                <p>
                    Proses layanan telah selesai.
                    Terima kasih telah menggunakan Nayla Service.
                </p>
            </div>

            <div class="detail-content">
                <p class="eyebrow">LAYANAN SELESAI</p>

                <h3 class="section-title">
                    Perangkat telah diserahkan.
                </h3>

                <p class="section-description">
                    Seluruh tahapan servis telah selesai.
                    Riwayat pesanan ini dapat dilihat kembali
                    menggunakan nomor pesanan yang sama.
                </p>

                <div class="form-grid info-spacing">
                    <div class="readonly-field">
                        <label>Nomor Pesanan</label>
                        <div>NS-241120</div>
                    </div>

                    <div class="readonly-field">
                        <label>Perangkat</label>
                        <div>iPhone 13 Pro</div>
                    </div>

                    <div class="readonly-field full">
                        <label>Status Akhir</label>
                        <div>Servis selesai dan perangkat diserahkan</div>
                    </div>
                </div>

                <div class="inline-notice success-notice">
                    ✓ Terima kasih telah mempercayakan
                    perangkatmu kepada Nayla Service.
                </div>
            </div>
        </section>

    </div>
</section>

<!-- MODAL KONFIRMASI / FOTO -->
<div class="modal-backdrop" id="modal" hidden>
    <div class="modal"
         role="dialog"
         aria-modal="true"
         aria-labelledby="modalTitle">

        <div class="modal-header">
            <h3 id="modalTitle"></h3>

            <button type="button"
                    id="closeModal"
                    aria-label="Tutup">×</button>
        </div>

        <div class="modal-body" id="modalBody"></div>

        <div class="modal-footer" id="modalFooter"></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const DEMO_ORDER = 'NS-241120';
    const STORAGE_KEY = 'nayla-customer-status-demo-v1';

    const stages = {
        1: {
            title: 'Pesanan diterima.',
            description: ''
        },
        2: {
            title: 'Perangkat sedang diperiksa.',
            description:
                'Teknisi sedang memeriksa kondisi perangkat dan menyiapkan hasil diagnosis.'
        },
        3: {
            title: 'Menunggu persetujuan pelanggan.',
            description:
                'Hasil diagnosis dan estimasi biaya sudah siap untuk kamu tinjau.'
        },
        4: {
            title: 'Perangkat sedang diperbaiki.',
            description:
                'Perbaikan sedang dilakukan sesuai persetujuan pelanggan.'
        },
        5: {
            title: 'Perangkat siap diambil.',
            description:
                'Perbaikan selesai. Perangkat dapat diambil setelah konfirmasi.'
        },
        6: {
            title: 'Pesanan telah selesai.',
            description:
                'Perangkat telah diserahkan dan layanan servis selesai.'
        }
    };

    const form = document.getElementById('searchForm');
    const input = document.getElementById('orderInput');
    const error = document.getElementById('searchError');
    const result = document.getElementById('result');
    const demoToolbar = document.getElementById('demoToolbar');

    const demoStage = document.getElementById('demoStage');
    const resetDemo = document.getElementById('resetDemo');

    const statusTitle = document.getElementById('statusTitle');
    const statusDescription = document.getElementById(
        'statusDescription'
    );

    const steps = Array.from(
        document.querySelectorAll('#cek-status .step')
    );

    const detailSections = Array.from(
        document.querySelectorAll('#cek-status [data-detail-stage]')
    );

    const approvalMessage = document.getElementById(
        'approvalMessage'
    );

    const modal = document.getElementById('modal');
    const modalTitle = document.getElementById('modalTitle');
    const modalBody = document.getElementById('modalBody');
    const modalFooter = document.getElementById('modalFooter');

    let currentStage = 1;
    let lastFocusedElement = null;

    function readSavedStage() {
        try {
            const value = Number(localStorage.getItem(STORAGE_KEY));

            if (Number.isInteger(value) &&
                value >= 1 &&
                value <= 6) {
                return value;
            }
        } catch (error) {
            // Penyimpanan browser mungkin tidak tersedia.
        }

        return 1;
    }

    function saveStage(stage) {
        try {
            localStorage.setItem(STORAGE_KEY, String(stage));
        } catch (error) {
            // Mode demo tetap berjalan tanpa penyimpanan.
        }
    }

    function updateStatus(stage, persist = true) {

        const number = Number(stage);

        if (!stages[number]) return;

        currentStage = number;

        statusTitle.textContent = stages[number].title;
        statusDescription.textContent =
            stages[number].description;

        statusDescription.hidden =
            !stages[number].description;

        demoStage.value = String(number);

        steps.forEach(step => {
            const stepNumber = Number(step.dataset.step);
            const dot = step.querySelector('.step-dot');

            step.classList.toggle(
                'is-complete',
                stepNumber < number
            );

            step.classList.toggle(
                'is-current',
                stepNumber === number
            );

            if (stepNumber < number) {
                dot.textContent = '✓';
            } else {
                dot.textContent =
                    String(stepNumber).padStart(2, '0');
            }
        });

        const progress =
            document.getElementById('timeline');

        progress.style.setProperty(
            '--progress',
            ((number - 1) / 5 * 100) + '%'
        );

        detailSections.forEach(section => {
            section.hidden =
                Number(section.dataset.detailStage) !== number;
        });

        if (approvalMessage) {
            approvalMessage.hidden = true;
        }

        if (persist) {
            saveStage(number);
        }
    }

    // ==================================
    // PENCARIAN NOMOR PESANAN
    // ==================================

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const orderNumber =
            input.value.trim().toUpperCase();

        input.value = orderNumber;

        if (orderNumber !== DEMO_ORDER) {
            result.hidden = true;
            demoToolbar.hidden = true;
            error.textContent =
                'Nomor pesanan tidak ditemukan pada data demo. Gunakan NS-241120.';
            error.hidden = false;
            return;
        }

        error.hidden = true;
        demoToolbar.hidden = false;
        result.hidden = false;

        updateStatus(currentStage, false);

        result.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });

    input.addEventListener('input', function () {
        error.hidden = true;

        if (input.value.trim().toUpperCase() !== DEMO_ORDER) {
            result.hidden = true;
            demoToolbar.hidden = true;
        }
    });

    // ==================================
    // PREVIEW STATUS 01 - 06
    // ==================================

    demoStage.addEventListener('change', function () {
        input.value = DEMO_ORDER;
        error.hidden = true;
        result.hidden = false;

        updateStatus(Number(this.value));
    });

    resetDemo.addEventListener('click', function () {
        input.value = DEMO_ORDER;
        error.hidden = true;
        result.hidden = false;

        updateStatus(1);
    });

    // ==================================
    // MODAL
    // ==================================

    function openModal(title, bodyHTML, footerHTML) {
        lastFocusedElement = document.activeElement;

        modalTitle.textContent = title;
        modalBody.innerHTML = bodyHTML;
        modalFooter.innerHTML = footerHTML;

        modal.hidden = false;
        document.body.classList.add('modal-open');

        document.getElementById('closeModal').focus();
    }

    function closeModal() {
        modal.hidden = true;
        document.body.classList.remove('modal-open');

        if (lastFocusedElement &&
            typeof lastFocusedElement.focus === 'function') {
            lastFocusedElement.focus();
        }
    }

    document.getElementById('closeModal')
        .addEventListener('click', closeModal);

    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && !modal.hidden) {
            closeModal();
        }
    });

    // ==================================
    // FOTO CUSTOMER (PLACEHOLDER DEMO)
    // ==================================

    document.getElementById('customerPhotoButton')
        .addEventListener('click', function () {

            openModal(
                'Foto Kondisi Perangkat',
                `
                <div class="photo-modal-placeholder">
                    <svg viewBox="0 0 24 24">
                        <rect x="3" y="3" width="18"
                              height="18" rx="2"/>
                        <circle cx="8" cy="8" r="1.5"/>
                        <path d="m3 18 6-6 4 4 3-3 5 5"/>
                    </svg>

                    <strong>Foto belum tersedia</strong>

                    <p>
                        Ini adalah data contoh.
                        Foto asli akan tampil setelah
                        dihubungkan dengan data pesanan customer.
                    </p>
                </div>
                `,
                `
                <button type="button"
                        class="button-outline"
                        id="modalDismiss">
                    Tutup
                </button>
                `
            );
        });

    // ==================================
    // PERSETUJUAN
    // ==================================

    document.getElementById('approveButton')
        .addEventListener('click', function () {

            openModal(
                'Konfirmasi Perbaikan',
                `
                <p>
                    Apakah kamu menyetujui perbaikan
                    perangkat dengan total estimasi
                    <strong>Rp 2.650.000</strong>?
                </p>

                <div class="modal-estimate">
                    <span>Total estimasi</span>
                    <strong>Rp 2.650.000</strong>
                </div>

                <p class="modal-note">
                    Konfirmasi ini hanya berlaku
                    untuk simulasi frontend.
                </p>
                `,
                `
                <button type="button"
                        class="button-outline"
                        id="modalDismiss">
                    Kembali
                </button>

                <button type="button"
                        class="button-gold"
                        id="confirmApproval">
                    Ya, Setujui
                </button>
                `
            );
        });

    document.getElementById('rejectButton')
        .addEventListener('click', function () {

            openModal(
                'Batalkan Perbaikan',
                `
                <p>
                    Apakah kamu yakin ingin membatalkan
                    perbaikan perangkat?
                </p>

                <p class="modal-note">
                    Pada versi demo, pembatalan hanya
                    menampilkan konfirmasi dan belum
                    dikirimkan ke admin.
                </p>
                `,
                `
                <button type="button"
                        class="button-outline"
                        id="modalDismiss">
                    Kembali
                </button>

                <button type="button"
                        class="button-gold"
                        id="confirmRejection">
                    Ya, Batalkan
                </button>
                `
            );
        });

    // Tombol yang dibuat secara dinamis di modal.
    modalFooter.addEventListener('click', function (event) {

        const target = event.target;

        if (!(target instanceof Element)) return;

        if (target.closest('#modalDismiss')) {
            closeModal();
            return;
        }

        if (target.closest('#confirmApproval')) {
            closeModal();

            // Simulasi: persetujuan memajukan tahap ke 04.
            updateStatus(4);

            document.querySelector(
                '#cek-status [data-detail-stage="4"]'
            ).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

            return;
        }

        if (target.closest('#confirmRejection')) {
            closeModal();

            // Tidak memajukan status jika dibatalkan.
            updateStatus(3);

            approvalMessage.textContent =
                'Pembatalan dicatat pada tampilan demo. Belum ada perubahan data di sistem Admin.';

            approvalMessage.hidden = false;
        }
    });

    // ==================================
    // INISIALISASI
    // ==================================

    currentStage = readSavedStage();
    updateStatus(currentStage, false);

});
</script>