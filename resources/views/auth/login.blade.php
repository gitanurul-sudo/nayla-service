<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Staf | Nayla Service</title>

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
                    <i data-lucide="shield-check"></i>
                    STAFF MANAGEMENT SYSTEM
                </div>

                <h1>
                    Kelola layanan.<br>
                    <span>Lebih mudah.</span>
                </h1>

                <p>
                    Satu sistem untuk mengelola pesanan,
                    memantau progres perbaikan, dan
                    meningkatkan pelayanan Nayla Service.
                </p>

                <div class="promo-features">
                    <div><i data-lucide="check-circle-2"></i> Monitoring pesanan</div>
                    <div><i data-lucide="check-circle-2"></i> Pengelolaan status servis</div>
                    <div><i data-lucide="check-circle-2"></i> Dashboard Admin dan Teknisi</div>
                </div>
            </div>

            <div class="promo-footer">
                © 2026 Nayla Service. All rights reserved.
            </div>
        </section>

        <section class="auth-side">
            <div class="auth-card">
                <div class="auth-icon">
                    <i data-lucide="lock-keyhole"></i>
                </div>

                <p class="auth-eyebrow">WELCOME BACK</p>
                <h2>Masuk ke akun Anda</h2>
                <p class="auth-description">
                    Masukkan informasi akun untuk melanjutkan
                    ke dashboard Nayla Service.
                </p>

                <div id="registerNotice" class="auth-alert success" hidden>
                    <i data-lucide="check-circle-2"></i>
                    Pendaftaran berhasil. Silakan masuk ke akun Anda.
                </div>

                <div id="loginError" class="auth-alert error" hidden></div>

                <form id="loginForm" novalidate>
                    <div class="form-group">
                        <label for="loginEmail">Alamat Email</label>
                        <div class="input-wrap">
                            <i data-lucide="mail"></i>
                            <input type="email" id="loginEmail"
                                   placeholder="nama@email.com"
                                   autocomplete="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <div class="input-wrap">
                            <i data-lucide="lock"></i>
                            <input type="password" id="loginPassword"
                                   placeholder="Masukkan password"
                                   autocomplete="current-password" required>
                            <button type="button" class="password-toggle"
                                    data-toggle-password="loginPassword"
                                    aria-label="Tampilkan password">
                                <i data-lucide="eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="loginRole">Masuk sebagai</label>
                        <div class="input-wrap select-wrap">
                            <i data-lucide="users-round"></i>
                            <select id="loginRole" required>
                                <option value="">Pilih role akun</option>
                                <option value="admin">Admin</option>
                                <option value="teknisi">Teknisi</option>
                            </select>
                            <i data-lucide="chevron-down" class="select-arrow"></i>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" id="rememberMe">
                            <span>Ingat email saya</span>
                        </label>
                    </div>

                    <button type="submit" class="auth-submit">
                        Masuk ke Dashboard
                        <i data-lucide="arrow-right"></i>
                    </button>
                </form>

                <p class="auth-switch">
                    Belum memiliki akun staf?
                    <a href="{{ route('register') }}">Daftar Sekarang</a>
                </p>

                <div class="auth-divider"><span>ATAU</span></div>

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
                button.setAttribute('aria-label',
                    visible ? 'Sembunyikan password' : 'Tampilkan password');
                button.innerHTML = visible
                    ? '<i data-lucide="eye-off"></i>'
                    : '<i data-lucide="eye"></i>';
                initializeIcons();
            });
        });

        const remembered = localStorage.getItem('nayla-remember-email');
        if (remembered) {
            $('loginEmail').value = remembered;
            $('rememberMe').checked = true;
        }

        const params = new URLSearchParams(window.location.search);
        const chosenRole = params.get('role');

        if (['admin', 'teknisi'].includes(chosenRole)) {
            $('loginRole').value = chosenRole;
        }

        $('registerNotice').hidden = params.get('registered') !== '1';

        $('loginForm').addEventListener('submit', event => {
            event.preventDefault();

            const email = $('loginEmail').value.trim();
            const password = $('loginPassword').value;
            const role = $('loginRole').value;
            const error = $('loginError');

            error.hidden = true;

            if (!email || !password || !role) {
                error.textContent = 'Lengkapi email, password, dan pilihan role.';
                error.hidden = false;
                return;
            }

            if (!$('loginEmail').checkValidity()) {
                error.textContent = 'Format alamat email tidak valid.';
                error.hidden = false;
                return;
            }

            if ($('rememberMe').checked) {
                localStorage.setItem('nayla-remember-email', email);
            } else {
                localStorage.removeItem('nayla-remember-email');
            }

            // Hanya untuk navigasi antarmuka; bukan autentikasi server.
            sessionStorage.setItem(
                'nayla-staff-preview',
                JSON.stringify({ email, role })
            );

            const adminUrl = @json(route('admin.dashboard'));
            const teknisiUrl = @json(route('teknisi.dashboard'));

            window.location.href = role === 'admin'
                ? adminUrl
                : teknisiUrl;
        });
    });
    </script>
</body>
</html>