
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Staf | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite('resources/css/auth.css')

    <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js" defer></script>
</head>
<body>
    <main class="auth-layout">

        <section class="auth-promo">
            <a href="{{ url('/') }}" class="auth-brand">
                <span class="brand-icon">N</span>
                <span>NAYLA <b>SERVICE</b></span>
            </a>

            <div class="promo-content">
                <div class="promo-label">
                    <i data-lucide="user-plus"></i>
                    STAFF REGISTRATION
                </div>

                <h1>
                    Mulai bergabung.<br>
                    <span>Bersama Nayla.</span>
                </h1>

                <p>
                    Daftarkan profil staf Nayla Service
                    melalui tampilan registrasi yang sederhana
                    dan mudah digunakan.
                </p>

                <div class="promo-features">
                    <div><i data-lucide="check-circle-2"></i> Form pendaftaran responsif</div>
                    <div><i data-lucide="check-circle-2"></i> Validasi pengisian data</div>
                    <div><i data-lucide="check-circle-2"></i> Dashboard sesuai role</div>
                </div>
            </div>

            <div class="promo-footer">
                © 2026 Nayla Service. All rights reserved.
            </div>
        </section>

        <section class="auth-side">
            <div class="auth-card">
                <div class="auth-icon">
                    <i data-lucide="user-round-plus"></i>
                </div>

                <p class="auth-eyebrow">CREATE ACCOUNT</p>
                <h2>Buat akun staf</h2>
                <p class="auth-description">
                    Lengkapi informasi berikut untuk membuat
                    akun staf Nayla Service.
                </p>

                <div class="auth-alert error"
                     id="registerError" hidden></div>

                <form id="registerForm" novalidate>

                    <div class="form-group">
                        <label for="registerName">Nama Lengkap</label>
                        <div class="input-wrap">
                            <i data-lucide="user-round"></i>
                            <input
                                type="text"
                                id="registerName"
                                placeholder="Masukkan nama lengkap"
                                maxlength="100"
                                autocomplete="name"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registerEmail">Alamat Email</label>
                        <div class="input-wrap">
                            <i data-lucide="mail"></i>
                            <input
                                type="email"
                                id="registerEmail"
                                placeholder="nama@email.com"
                                autocomplete="email"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registerRole">Daftar sebagai</label>
                        <div class="input-wrap select-wrap">
                            <i data-lucide="shield-check"></i>
                            <select id="registerRole" required>
                                <option value="">Pilih role akun</option>
                                <option value="admin">Admin</option>
                                <option value="teknisi">Teknisi</option>
                            </select>
                            <i data-lucide="chevron-down" class="select-arrow"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <div class="input-wrap">
                            <i data-lucide="lock"></i>
                            <input
                                type="password"
                                id="registerPassword"
                                placeholder="Minimal 8 karakter"
                                autocomplete="new-password"
                                minlength="8"
                                required
                            >
                            <button
                                type="button"
                                class="password-toggle"
                                data-toggle-password="registerPassword"
                                aria-label="Tampilkan password"
                            >
                                <i data-lucide="eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Konfirmasi Password</label>
                        <div class="input-wrap">
                            <i data-lucide="lock-keyhole"></i>
                            <input
                                type="password"
                                id="confirmPassword"
                                placeholder="Ulangi password"
                                autocomplete="new-password"
                                minlength="8"
                                required
                            >
                            <button
                                type="button"
                                class="password-toggle"
                                data-toggle-password="confirmPassword"
                                aria-label="Tampilkan password"
                            >
                                <i data-lucide="eye"></i>
                            </button>
                        </div>
                    </div>

                    <label class="agreement">
                        <input type="checkbox" id="agreeTerms" required>
                        <span>
                            Saya menyetujui Syarat dan Ketentuan
                            penggunaan layanan Nayla Service.
                        </span>
                    </label>

                    <button type="submit" class="auth-submit">
                        Daftar Akun
                        <i data-lucide="arrow-right"></i>
                    </button>
                </form>

                <p class="auth-switch">
                    Sudah memiliki akun?
                    <a href="{{ route('login') }}">Masuk di sini</a>
                </p>

                <a href="{{ url('/') }}" class="customer-link">
                    <i data-lucide="house"></i>
                    Kembali ke Pilihan Akses
                </a>

            </div>
        </section>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const $ = id => document.getElementById(id);

        const params = new URLSearchParams(window.location.search);
        const chosenRole = params.get('role');

        if (['admin', 'teknisi'].includes(chosenRole)) {
            $('registerRole').value = chosenRole;
        }

        function initializeIcons() {
            if (window.lucide) lucide.createIcons();
        }

        if (window.lucide) initializeIcons();
        else window.addEventListener('load', initializeIcons, { once: true });

        document.querySelectorAll('[data-toggle-password]').forEach(button => {
            button.addEventListener('click', () => {
                const input = $(button.dataset.togglePassword);
                const visible = input.type === 'password';

                input.type = visible ? 'text' : 'password';
                button.setAttribute(
                    'aria-label',
                    visible ? 'Sembunyikan password' : 'Tampilkan password'
                );
                button.innerHTML = visible
                    ? '<i data-lucide="eye-off"></i>'
                    : '<i data-lucide="eye"></i>';
                initializeIcons();
            });
        });

        $('registerForm').addEventListener('submit', event => {
            event.preventDefault();

            const name = $('registerName').value.trim();
            const email = $('registerEmail').value.trim();
            const role = $('registerRole').value;
            const password = $('registerPassword').value;
            const confirmation = $('confirmPassword').value;
            const error = $('registerError');

            error.hidden = true;

            function fail(message) {
                error.textContent = message;
                error.hidden = false;
            }

            if (!name || !email || !role || !password || !confirmation) {
                return fail('Semua kolom wajib diisi.');
            }

            if (!$('registerEmail').checkValidity()) {
                return fail('Format alamat email tidak valid.');
            }

            if (password.length < 8) {
                return fail('Password minimal 8 karakter.');
            }

            if (password !== confirmation) {
                return fail('Konfirmasi password tidak sama.');
            }

            if (!$('agreeTerms').checked) {
                return fail('Silakan setujui Syarat dan Ketentuan terlebih dahulu.');
            }

            sessionStorage.setItem(
                'nayla-registration-preview',
                JSON.stringify({ name, email, role })
            );

            window.location.href =
                @json(route('login')) +
                '?registered=1&role=' +
                encodeURIComponent(role);
            });
    });
    </script>
</body>
</html>