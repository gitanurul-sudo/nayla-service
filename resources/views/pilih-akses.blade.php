
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Akses | Nayla Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js" defer></script>

    <style>
        :root {
            --bg: #0d0f0e;
            --panel: #171a18;
            --line: #343934;
            --gold: #edae50;
            --text: #f5f3ef;
            --muted: #929a93;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .access-container {
            width: 100%;
            max-width: 780px;
            padding: 49px 42px 40px;
            background: linear-gradient(145deg, #1b1f1b, #111512);
            border: 1px solid #323a33;
            border-radius: 20px;
            box-shadow: 0 25px 100px rgba(0,0,0,.35);
            text-align: center;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 31px;
            font-family: 'Manrope', sans-serif;
            font-size: 15px;
            font-weight: 800;
        }

        .brand-logo {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, #f7c773, #dba040);
            color: #21180c;
            border-radius: 11px;
            font-size: 20px;
        }

        .brand b {
            color: var(--gold);
        }

        .eyebrow {
            color: var(--gold);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 13px;
        }

        h1 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(27px, 4vw, 38px);
            font-weight: 700;
            letter-spacing: -1.1px;
            margin-bottom: 13px;
        }

        .description {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .access-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 15px;
        }

        .access-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 13px;
            min-height: 195px;
            padding: 22px 15px;
            background: #161a17;
            border: 1px solid #343a34;
            border-radius: 13px;
            transition: .2s ease;
        }

        .access-card:hover,
        .access-card:focus-visible {
            border-color: var(--gold);
            background: #272219;
            transform: translateY(-4px);
            outline: none;
        }

        .access-icon {
            display: grid;
            place-items: center;
            width: 52px;
            height: 52px;
            background: #342a1b;
            color: var(--gold);
            border-radius: 13px;
        }

        .access-icon svg {
            width: 25px;
            height: 25px;
        }

        .access-card h2 {
            font-family: 'Manrope', sans-serif;
            font-size: 17px;
            font-weight: 700;
        }

        .access-card p {
            color: var(--muted);
            font-size: 11px;
            line-height: 1.6;
        }

        .access-card .arrow {
            width: 17px;
            height: 17px;
            color: var(--gold);
        }

        .footer-text {
            margin-top: 30px;
            color: #767d76;
            font-size: 11px;
            line-height: 1.7;
        }

        @media (max-width: 640px) {
            .access-container {
                padding: 33px 20px;
            }

            .access-grid {
                grid-template-columns: 1fr;
                gap: 11px;
            }

            .access-card {
                min-height: 125px;
                gap: 9px;
            }

            .access-icon {
                width: 43px;
                height: 43px;
            }

            h1 {
                font-size: 27px;
            }

            .description {
                margin-bottom: 27px;
            }
        }
    </style>
</head>

<body>
    <main class="access-container">

        <div class="brand">
            <span class="brand-logo">N</span>
            <span>NAYLA <b>SERVICE</b></span>
        </div>

        <p class="eyebrow">WELCOME TO NAYLA SERVICE</p>

        <h1>Pilih Tampilan Website</h1>

        <p class="description">
            Pilih jenis pengguna untuk melanjutkan
            ke layanan Nayla Service.
        </p>

        <div class="access-grid">

            <!-- CUSTOMER -->
            <a href="{{ url('/beranda') }}" class="access-card">
                <span class="access-icon">
                    <i data-lucide="shopping-bag"></i>
                </span>

                <h2>Customer</h2>

                <p>
                    Lihat layanan dan buat
                    pesanan servis.
                </p>

                <i data-lucide="arrow-right" class="arrow"></i>
            </a>

            <!-- ADMIN -->
            <a href="{{ route('register', ['role' => 'admin']) }}"
               class="access-card">
                <span class="access-icon">
                    <i data-lucide="shield-check"></i>
                </span>

                <h2>Admin</h2>

                <p>
                    Daftar akun untuk mengelola
                    operasional.
                </p>

                <i data-lucide="arrow-right" class="arrow"></i>
            </a>

            <!-- TEKNISI -->
            <a href="{{ route('register', ['role' => 'teknisi']) }}"
               class="access-card">
                <span class="access-icon">
                    <i data-lucide="wrench"></i>
                </span>

                <h2>Teknisi</h2>

                <p>
                    Daftar akun untuk mengelola
                    proses perbaikan.
                </p>

                <i data-lucide="arrow-right" class="arrow"></i>
            </a>

        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) {
                lucide.createIcons();
            } else {
                window.addEventListener('load', () => {
                    if (window.lucide) lucide.createIcons();
                }, { once: true });
            }
        });
    </script>
</body>
</html>
