<main class="consultation-layout">

        <!-- KOLOM KIRI -->
        <section class="consultation-intro">

            <span class="section-badge">KONSULTASI</span>

            <h1>
                Ceritakan<br>
                masalah<br>
                <span>perangkatmu.</span>
            </h1>

            <p class="intro-description">
                Tim kami akan menghubungi kamu secepatnya
                untuk memberikan solusi terbaik.
            </p>

            <div class="benefits">

                <div class="benefit">
                    <span class="benefit-icon">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M12 7v5l3 2"/>
                        </svg>
                    </span>
                    <div>
                        <h3>Respon Cepat</h3>
                        <p>Kami akan membalas dalam 1×24 jam.</p>
                    </div>
                </div>

                <div class="benefit">
                    <span class="benefit-icon">
                        <svg viewBox="0 0 24 24">
                            <circle cx="9" cy="8" r="3"/>
                            <path d="M3 20v-2a6 6 0 0 1 12 0v2"/>
                            <path d="m16 10 2 2 4-4"/>
                        </svg>
                    </span>
                    <div>
                        <h3>Solusi Profesional</h3>
                        <p>Ditangani oleh teknisi berpengalaman.</p>
                    </div>
                </div>

                <div class="benefit">
                    <span class="benefit-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2 20 6v6c0 5-4 8-8 10-4-2-8-5-8-10V6z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>
                    </span>
                    <div>
                        <h3>Data Aman</h3>
                        <p>Data konsultasi dikelola sesuai kebijakan privasi.</p>
                    </div>
                </div>

            </div>

        </section>

        <!-- KOLOM KANAN -->
        <section class="consultation-card">

            <div class="form-heading">
                <span class="form-heading-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M4 5h16v13H8l-4 3z"/>
                    </svg>
                </span>
                <div>
                    <h2>Form Konsultasi</h2>
                    <p>Isi data di bawah ini dan ceritakan masalah perangkatmu.</p>
                </div>
            </div>

            @if($errors->any())
                <div class="alert-error" role="alert">
                    <strong>Periksa kembali formulir:</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="alert-info" role="status">
                    {{ session('success') }}
                </div>
            @endif

            <form id="consultationForm"
                  action="{{ route('customer.konsultasi.submit') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <!-- NAMA -->
                <div class="form-group">
                    <label for="nama">
                        <svg viewBox="0 0 24 24">
                            <circle cx="9" cy="8" r="3"/>
                            <path d="M3 20v-2a6 6 0 0 1 12 0v2"/>
                            <path d="m17 8 2 2 3-3"/>
                        </svg>
                        Nama / WhatsApp
                    </label>

                    <div class="input-wrapper">
                        <svg viewBox="0 0 24 24">
                            <circle cx="9" cy="8" r="3"/>
                            <path d="M3 20v-2a6 6 0 0 1 12 0v2"/>
                        </svg>
                        <input type="text"
                               id="nama"
                               name="nama"
                               value="{{ old('nama') }}"
                               placeholder="Contoh: Nayla Ramadhani"
                               maxlength="100"
                               autocomplete="name"
                               required>
                    </div>
                </div>

                <!-- WHATSAPP -->
                <div class="form-group">
                    <label for="whatsapp">
                        <svg viewBox="0 0 24 24">
                            <path d="M6 3h4l2 5-2.5 2a15 15 0 0 0 4.5 4.5L16 12l5 2v4a3 3 0 0 1-3 3A15 15 0 0 1 3 6a3 3 0 0 1 3-3z"/>
                        </svg>
                        Nomor HP / WhatsApp
                    </label>

                    <div class="input-wrapper">
                        <svg viewBox="0 0 24 24">
                            <path d="M6 3h4l2 5-2.5 2a15 15 0 0 0 4.5 4.5L16 12l5 2v4a3 3 0 0 1-3 3A15 15 0 0 1 3 6a3 3 0 0 1 3-3z"/>
                        </svg>
                        <input type="tel"
                               id="whatsapp"
                               name="whatsapp"
                               value="{{ old('whatsapp') }}"
                               placeholder="Contoh: 081234567890"
                               maxlength="20"
                               autocomplete="tel"
                               inputmode="tel"
                               required>
                    </div>
                </div>

                <!-- MODEL HP -->
                <div class="form-group">
                    <label for="model_hp">
                        <svg viewBox="0 0 24 24">
                            <rect x="6" y="2" width="12" height="20" rx="2"/>
                            <path d="M10 18h4"/>
                        </svg>
                        Model / Tipe Perangkat
                    </label>

                    <div class="input-wrapper">
                        <svg viewBox="0 0 24 24">
                            <rect x="6" y="2" width="12" height="20" rx="2"/>
                            <path d="M10 18h4"/>
                        </svg>
                        <input type="text"
                               id="model_hp"
                               name="model_hp"
                               value="{{ old('model_hp') }}"
                               placeholder="Contoh: iPhone 13 Pro"
                               maxlength="100"
                               required>
                    </div>
                </div>

                <!-- DESKRIPSI -->
                <div class="form-group">
                    <label for="keluhan">
                        <svg viewBox="0 0 24 24">
                            <path d="M6 2h9l4 4v16H6z"/>
                            <path d="M14 2v5h5M9 11h7M9 15h7"/>
                        </svg>
                        Deskripsi Masalah
                    </label>

                    <div class="textarea-wrapper">
                        <textarea id="keluhan"
                                  name="keluhan"
                                  maxlength="500"
                                  placeholder="Jelaskan masalah atau kerusakan perangkat..."
                                  required>{{ old('keluhan') }}</textarea>
                        <span id="charCount">0 / 500</span>
                    </div>
                </div>

                <!-- UPLOAD FOTO -->
                <div class="upload-box">
                    <span class="upload-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="3"/>
                            <circle cx="8" cy="8" r="2"/>
                            <path d="m5 18 5-6 4 4 3-3 3 5"/>
                        </svg>
                    </span>

                    <div class="upload-description">
                        <strong>Opsional: Tambahkan foto perangkat</strong>
                        <span id="fileName">Format JPG, PNG (maks. 5 MB)</span>
                    </div>

                    <label for="foto" class="upload-button">
                        <span>＋</span> Pilih Foto
                    </label>

                    <input type="file"
                           id="foto"
                           name="foto"
                           accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                           class="file-input">
                </div>

                <p id="fileError" class="file-error" role="alert" hidden></p>

                <!-- FOOTER FORM -->
                <div class="form-footer">

                    <label class="agreement">
                        <input type="checkbox"
                               id="persetujuan"
                               name="persetujuan"
                               value="1"
                               {{ old('persetujuan') ? 'checked' : '' }}
                               required>
                        <span>
                            Saya setuju data ini digunakan
                            untuk keperluan konsultasi.
                        </span>
                    </label>

                    <button type="submit"
                            id="submitButton"
                            class="submit-button"
                            disabled>
                        Kirim Konsultasi
                        <span aria-hidden="true">→</span>
                    </button>
                </div>

            </form>
        </section>

    </main>
    <script>
document.addEventListener('DOMContentLoaded', function () {

    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', function () {
        const open = navLinks.classList.toggle('show');
        menuToggle.setAttribute('aria-expanded', String(open));
    });

    const form = document.getElementById('consultationForm');
    const keluhan = document.getElementById('keluhan');
    const charCount = document.getElementById('charCount');
    const foto = document.getElementById('foto');
    const fileName = document.getElementById('fileName');
    const fileError = document.getElementById('fileError');
    const persetujuan = document.getElementById('persetujuan');
    const submitButton = document.getElementById('submitButton');

    function updateForm() {
        charCount.textContent = `${keluhan.value.length} / 500`;

        submitButton.disabled =
            !form.checkValidity() ||
            Boolean(fileError.textContent);
    }

    keluhan.addEventListener('input', updateForm);

    form.querySelectorAll('input, textarea').forEach(input => {
        input.addEventListener('input', updateForm);
        input.addEventListener('change', updateForm);
    });

    foto.addEventListener('change', function () {
        fileError.textContent = '';
        fileError.hidden = true;

        const file = foto.files[0];

        if (!file) {
            fileName.textContent = 'Format JPG, PNG (maks. 5 MB)';
            updateForm();
            return;
        }

        const types = ['image/jpeg', 'image/png'];

        if (!types.includes(file.type) || file.size > 5 * 1024 * 1024) {
            foto.value = '';
            fileName.textContent = 'Format JPG, PNG (maks. 5 MB)';
            fileError.textContent =
                'Gunakan foto JPG atau PNG dengan ukuran maksimal 5 MB.';
            fileError.hidden = false;
        } else {
            fileName.textContent = file.name;
        }

        updateForm();
    });

    form.addEventListener('submit', function (event) {
        updateForm();

        if (submitButton.disabled) {
            event.preventDefault();
        }
    });

    updateForm();
});
</script>
