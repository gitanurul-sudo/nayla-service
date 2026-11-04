
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                // Halaman Customer Nayla Service
                'resources/css/customer-home.css',
                'resources/css/customer-layanan.css',
                'resources/css/customer-lokasi.css',
                'resources/css/customer-konsultasi.css',
                'resources/css/customer-konsultasi-sukses.css',
                'resources/css/customer-status.css',

                // Halaman admin Nayla Service
                'resources/css/admin-dashboard.css',
                'resources/css/admin-pesanan.css',
                'resources/css/admin-pelanggan.css',
                'resources/css/admin-laporan.css',
                'resources/css/admin-update-status.css',

                // Halaman Teknisi 
                'resources/css/teknisi-dashboard.css',
                'resources/css/teknisi-antrean.css',
                'resources/css/teknisi-riwayat.css',
                'resources/css/teknisi-diagnosis.css',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});