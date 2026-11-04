
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Diagnosis Perangkat | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite('resources/css/teknisi-diagnosis.css')
</head>
<body>

<div class="tech-layout">

    <!-- SIDEBAR -->
    <aside class="tech-sidebar" id="techSidebar">

        <a href="{{ route('teknisi.dashboard') }}" class="tech-brand">
            <span class="tech-brand-icon">N</span>
            <span class="tech-brand-name">
                NAYLA <strong>SERVICE</strong>
            </span>
        </a>

        <p class="tech-menu-caption">TECHNICIAN SPACE</p>

        <nav class="tech-sidebar-nav" aria-label="Menu Teknisi">

            <a href="{{ route('teknisi.dashboard') }}" class="tech-nav-item">
                <svg viewBox="0 0 24 24">
                    <rect x="3" y="3" width="7" height="7" rx="1"/>
                    <rect x="14" y="3" width="7" height="7" rx="1"/>
                    <rect x="3" y="14" width="7" height="7" rx="1"/>
                    <rect x="14" y="14" width="7" height="7" rx="1"/>
                </svg>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('teknisi.antrean') }}"
               class="tech-nav-item active">
                <svg viewBox="0 0 24 24">
                    <path d="M7 3h8l4 4v14H7z"/>
                    <path d="M15 3v5h4M10 12h6M10 16h6"/>
                </svg>
                <span>Antrean Saya</span>
                <span class="tech-nav-count">4</span>
            </a>

            <a href="{{ route('teknisi.riwayat') }}" class="tech-nav-item">
                <svg viewBox="0 0 24 24">
                    <rect x="4" y="3" width="16" height="18" rx="2"/>
                    <path d="M8 16v-4M12 16V8M16 16v-6"/>
                </svg>
                <span>Riwayat Pekerjaan</span>
            </a>

        </nav>

        <div class="tech-sidebar-footer">
            <span class="tech-user-avatar">RA</span>
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
                        aria-label="Buka menu">☰</button>

                <div>
                    <p class="tech-topbar-date">SENIN, 18 NOVEMBER 2024</p>
                    <h1>Diagnosis Perangkat</h1>
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

        <main class="tech-content">

            <!-- BACK -->
            <a href="{{ route('teknisi.antrean') }}" class="diagnosis-back">
                <svg viewBox="0 0 24 24">
                    <path d="m15 18-6-6 6-6"/>
                </svg>
                Kembali ke antrean
            </a>

            <!-- HEADING -->
            <section class="diagnosis-heading">

                <div>
                    <p class="tech-eyebrow">PESANAN #NS-241120</p>
                    <h2>Diagnosis Perangkat</h2>
                    <p>Catat hasil pemeriksaan dan kirim estimasi kepada admin.</p>
                </div>

                <div class="diagnosis-save-state" id="saveState">
                    <span>✓</span>
                    <span id="saveStateText">Draft belum disimpan</span>
                </div>

            </section>

            <!-- FORM -->
            <form class="diagnosis-card" id="diagnosisForm" novalidate>

                <!-- PESANAN -->
                <div class="diagnosis-customer">

                    <span class="diagnosis-device-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="7" y="2" width="10" height="20" rx="2"/>
                            <path d="M11 18h2"/>
                        </svg>
                    </span>

                    <div class="diagnosis-customer-info">
                        <p>SEDANG DIPERIKSA · #NS-241120</p>
                        <h3>iPhone 13 Pro</h3>
                        <span>Dinda Aulia · 0812 3456 8890</span>
                    </div>

                    <span class="diagnosis-badge">
                        <span class="diagnosis-blue-dot"></span>
                        Diagnosing
                    </span>

                </div>

                <div class="diagnosis-card-body">

                    <!-- KELUHAN -->
                    <div class="diagnosis-complaint">
                        <span>KELUHAN CUSTOMER</span>

                        <p>
                            “Layar bergaris warna hijau setelah HP terjatuh.
                            Touchscreen masih berfungsi normal.”
                        </p>

                        <small>
                            <svg viewBox="0 0 24 24">
                                <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z"/>
                                <circle cx="12" cy="12" r="2.5"/>
                            </svg>
                            Data pesanan hanya dapat dilihat
                        </small>
                    </div>

                    <!-- SECTION 1 -->
                    <section class="diagnosis-form-section">

                        <div class="diagnosis-step-heading">
                            <span class="diagnosis-step-number">01</span>

                            <div>
                                <h3>Hasil Diagnosis</h3>
                                <p>Catat kondisi dan kerusakan perangkat.</p>
                            </div>
                        </div>

                        <div class="diagnosis-field">
                            <label for="diagnosisNote">Catatan Diagnosis</label>

                            <textarea
                                id="diagnosisNote"
                                name="catatan_diagnosis"
                                rows="5"
                                maxlength="3000"
                                placeholder="Tuliskan hasil pemeriksaan secara detail..."
                            ></textarea>

                            <div class="diagnosis-character-count">
                                <span id="diagnosisCharCount">0</span>/3000
                            </div>
                        </div>

                        <!-- UPLOAD -->
                        <div class="diagnosis-upload">

                            <label for="diagnosisPhotos" class="diagnosis-upload-label">

                                <span class="diagnosis-upload-left">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 16V3m-5 5 5-5 5 5"/>
                                        <path d="M4 16v4h16v-4"/>
                                    </svg>
                                    Lampirkan foto kondisi perangkat
                                </span>

                                <span class="diagnosis-upload-action">
                                    Pilih Foto
                                </span>

                            </label>

                            <input type="file"
                                   id="diagnosisPhotos"
                                   name="foto[]"
                                   accept="image/jpeg,image/png"
                                   multiple
                                   hidden>

                            <p class="diagnosis-upload-help">
                                Format JPG atau PNG, maksimal 5 MB per foto.
                            </p>

                            <div class="diagnosis-photo-preview"
                                 id="photoPreview"
                                 aria-live="polite">
                            </div>

                        </div>

                    </section>

                    <!-- SECTION 2 -->
                    <section class="diagnosis-form-section diagnosis-cost-section">

                        <div class="diagnosis-step-heading">
                            <span class="diagnosis-step-number">02</span>

                            <div>
                                <h3>Biaya & Estimasi</h3>
                                <p>Berikan rincian estimasi kepada admin.</p>
                            </div>
                        </div>

                        <div class="diagnosis-cost-grid">

                            <div class="diagnosis-field">
                                <label for="sparepartCost">Biaya Sparepart</label>

                                <div class="diagnosis-input-wrap">
                                    <input type="text"
                                           inputmode="numeric"
                                           id="sparepartCost"
                                           name="biaya_sparepart"
                                           value="0"
                                           autocomplete="off">
                                    <span>Rp</span>
                                </div>
                            </div>

                            <div class="diagnosis-field">
                                <label for="serviceCost">Biaya Jasa</label>

                                <div class="diagnosis-input-wrap">
                                    <input type="text"
                                           inputmode="numeric"
                                           id="serviceCost"
                                           name="biaya_jasa"
                                           value="0"
                                           autocomplete="off">
                                    <span>Rp</span>
                                </div>
                            </div>

                        </div>

                        <div class="diagnosis-field">
                            <label for="repairTime">
                                Estimasi Waktu Perbaikan
                            </label>

                            <div class="diagnosis-input-wrap">
                                <input type="text"
                                       id="repairTime"
                                       name="estimasi_waktu"
                                       placeholder="Contoh: 2–3 hari kerja"
                                       maxlength="100">

                                <svg viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M12 7v5l3 2"/>
                                </svg>
                            </div>
                        </div>

                        <!-- TOTAL -->
                        <div class="diagnosis-total">
                            <div>
                                <strong>Total estimasi</strong>
                                <span>Belum termasuk biaya tambahan</span>
                            </div>

                            <strong id="totalCost">Rp 0</strong>
                        </div>

                    </section>

                </div>

                <!-- FOOTER -->
                <div class="diagnosis-card-footer">

                    <div class="diagnosis-reviewer">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M4 21v-2a8 8 0 0 1 16 0v2"/>
                        </svg>

                        Hasil akan ditinjau oleh
                        <strong>Nayla Admin</strong>
                    </div>

                    <div class="diagnosis-actions">

                        <button type="button"
                                class="diagnosis-draft-button"
                                id="saveDraft">
                            Simpan dan lanjutkan nanti
                        </button>

                        <button type="submit"
                                class="diagnosis-submit-button">
                            Kirim diagnosis ke admin

                            <svg viewBox="0 0 24 24">
                                <path d="M5 12h14m-6-6 6 6-6 6"/>
                            </svg>
                        </button>

                    </div>

                </div>

            </form>

        </main>
    </div>
</div>

<!-- MODAL KONFIRMASI -->
<div class="diagnosis-modal-backdrop" id="diagnosisModal" hidden>

    <div class="diagnosis-modal" role="dialog" aria-modal="true"
         aria-labelledby="diagnosisModalTitle">

        <div class="diagnosis-modal-header">
            <h3 id="diagnosisModalTitle">Konfirmasi Diagnosis</h3>
            <button type="button" id="closeDiagnosisModal"
                    aria-label="Tutup">×</button>
        </div>

        <div class="diagnosis-modal-body">
            <p>
                Apakah kamu yakin ingin mengirim hasil diagnosis
                pesanan <strong>#NS-241120</strong> kepada admin?
            </p>

            <div class="diagnosis-modal-summary">
                <span>Total estimasi</span>
                <strong id="confirmTotalCost">Rp 0</strong>
            </div>

            <p class="diagnosis-demo-notice">
                Ini masih simulasi frontend. Menekan konfirmasi
                belum mengirim data kepada admin.
            </p>
        </div>

        <div class="diagnosis-modal-footer">
            <button type="button" id="cancelDiagnosis">
                Batal
            </button>

            <button type="button" id="confirmDiagnosis">
                Konfirmasi
            </button>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('diagnosisForm');
    const note = document.getElementById('diagnosisNote');
    const charCount = document.getElementById('diagnosisCharCount');

    const sparepartCost = document.getElementById('sparepartCost');
    const serviceCost = document.getElementById('serviceCost');
    const repairTime = document.getElementById('repairTime');

    const totalCost = document.getElementById('totalCost');
    const saveDraft = document.getElementById('saveDraft');

    const photoInput = document.getElementById('diagnosisPhotos');
    const photoPreview = document.getElementById('photoPreview');

    const modal = document.getElementById('diagnosisModal');
    const closeModal = document.getElementById('closeDiagnosisModal');
    const cancelDiagnosis = document.getElementById('cancelDiagnosis');
    const confirmDiagnosis = document.getElementById('confirmDiagnosis');

    const saveState = document.getElementById('saveState');
    const saveStateText = document.getElementById('saveStateText');

    const DRAFT_KEY = 'nayla-teknisi-diagnosis-NS-241120';

    const rupiah = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    });

    function getNumber(value) {
        const digits = String(value).replace(/\D/g, '');
        return Number(digits || 0);
    }

    function formatNumber(value) {
        return new Intl.NumberFormat('id-ID').format(value);
    }

    function calculateTotal() {
        const total =
            getNumber(sparepartCost.value) +
            getNumber(serviceCost.value);

        totalCost.textContent = rupiah.format(total);

        document.getElementById('confirmTotalCost').textContent =
            rupiah.format(total);

        return total;
    }

    function markUnsaved() {
        saveStateText.textContent = 'Perubahan belum disimpan';
        saveState.classList.remove('is-saved');
    }

    // FORMAT ANGKA DAN TOTAL OTOMATIS
    [sparepartCost, serviceCost].forEach(input => {

        input.addEventListener('input', function () {

            const value = getNumber(this.value);
            this.value = formatNumber(value);

            calculateTotal();
            markUnsaved();
        });
    });

    // KARAKTER
    note.addEventListener('input', function () {
        charCount.textContent = this.value.length;
        markUnsaved();
    });

    repairTime.addEventListener('input', markUnsaved);

    // PREVIEW FOTO
    photoInput.addEventListener('change', function () {
        photoPreview.innerHTML = '';

        const files = Array.from(this.files);
        const validTypes = ['image/jpeg', 'image/png'];

        const invalid = files.some(file =>
            !validTypes.includes(file.type) ||
            file.size > 5 * 1024 * 1024
        );

        if (invalid) {
            alert('Foto harus JPG/PNG dan maksimal 5 MB per file.');
            this.value = '';
            return;
        }

        files.forEach(file => {
            const item = document.createElement('div');
            item.className = 'diagnosis-preview-item';

            const image = document.createElement('img');
            const url = URL.createObjectURL(file);

            image.src = url;
            image.alt = 'Pratinjau ' + file.name;

            image.addEventListener('load', () => {
                URL.revokeObjectURL(url);
            }, { once: true });

            const name = document.createElement('span');
            name.textContent = file.name;

            item.appendChild(image);
            item.appendChild(name);
            photoPreview.appendChild(item);
        });

        markUnsaved();
    });

    function getFormData() {
        return {
            catatan: note.value,
            sparepart: getNumber(sparepartCost.value),
            jasa: getNumber(serviceCost.value),
            waktu: repairTime.value
        };
    }

    // SIMPAN DRAFT LOKAL
    function saveLocalDraft() {
        try {
            localStorage.setItem(
                DRAFT_KEY,
                JSON.stringify(getFormData())
            );

            saveStateText.textContent = 'Draft tersimpan di browser';
            saveState.classList.add('is-saved');

            return true;
        } catch (error) {
            alert('Draft tidak dapat disimpan di browser ini.');
            return false;
        }
    }

    saveDraft.addEventListener('click', function () {
        if (saveLocalDraft()) {
            alert('Draft disimpan di browser ini. Foto perlu dipilih kembali saat halaman dibuka ulang.');
        }
    });

    // BACA DRAFT LOKAL
    try {
        const stored = localStorage.getItem(DRAFT_KEY);

        if (stored) {
            const data = JSON.parse(stored);

            note.value = data.catatan || '';
            sparepartCost.value = formatNumber(data.sparepart || 0);
            serviceCost.value = formatNumber(data.jasa || 0);
            repairTime.value = data.waktu || '';

            charCount.textContent = note.value.length;
            saveStateText.textContent = 'Draft tersimpan di browser';
            saveState.classList.add('is-saved');
        }
    } catch (error) {
        // Abaikan draft lokal yang tidak valid.
    }

    calculateTotal();

    // FORM VALIDATION
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        if (!note.value.trim()) {
            alert('Isi catatan diagnosis terlebih dahulu.');
            note.focus();
            return;
        }

        if (!repairTime.value.trim()) {
            alert('Isi estimasi waktu perbaikan.');
            repairTime.focus();
            return;
        }

        calculateTotal();
        modal.hidden = false;
        document.body.classList.add('diagnosis-modal-open');
        closeModal.focus();
    });

    function hideModal() {
        modal.hidden = true;
        document.body.classList.remove('diagnosis-modal-open');
    }

    closeModal.addEventListener('click', hideModal);
    cancelDiagnosis.addEventListener('click', hideModal);

    modal.addEventListener('click', event => {
        if (event.target === modal) hideModal();
    });

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && !modal.hidden) {
            hideModal();
        }
    });

    // SIMULASI FRONTEND, BUKAN PENGIRIMAN NYATA
    confirmDiagnosis.addEventListener('click', function () {
        hideModal();

        if (saveLocalDraft()) {
            alert(
                'Simulasi selesai. Data diagnosis tersimpan sebagai draft lokal, tetapi belum dikirim ke admin.'
            );
        }
    });

    // SIDEBAR MOBILE
    document.getElementById('techMenuToggle')
        ?.addEventListener('click', function () {
            document.getElementById('techSidebar')
                ?.classList.toggle('is-open');
        });

});
</script>

</body>
</html>