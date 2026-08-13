<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISP Management System</title>
    <!-- Anda bisa menambahkan link CSS/Bootstrap di sini jika diperlukan -->
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f6f9; }
        nav { background: #343a40; color: #fff; padding: 15px; display: flex; flex-wrap: wrap; gap: 10px; }
        nav a { color: #ffffff; text-decoration: none; padding: 5px 10px; border-radius: 4px; font-size: 14px; }
        nav a:hover { background-color: #495057; }
        .content-container { padding: 25px; }
        footer { text-align: center; padding: 15px; background: #e9ecef; color: #6c757d; margin-top: 40px; font-size: 13px; }
    </style>
</head>
<body>

    <!-- NAVIGASI UTAMA (MENU LENGKAP 1-17) -->
    <nav>
        <a href="/dashboard">Beranda</a>
        <a href="/pelanggan">Pelanggan</a>
        <a href="/tagihan">Tagihan</a>
        <a href="/kasir">Kasir</a>
        <a href="/keuangan/laporan">Laporan Keuangan</a>
        <a href="/peta">Peta Jaringan</a>
        <a href="/tiket">Tiket Gangguan</a>
        <a href="/log/activity">Activity Log</a>
        <a href="/log/system">System Log</a>
        <a href="/staff">Staff Internal</a>
        <a href="/settings">Settings</a>
        <a href="/chat">Live Chat CS</a>
        <a href="/paket">Paket Internet</a>
    </nav>

    <!-- AREA KONTEN DINAMIS -->
    <div class="content-container">
        <!-- Bagian ini akan otomatis diganti oleh file blade lain (seperti dashboard.blade.php) -->
        @yield('content')
    </div>

    <!-- FOOTER APLIKASI -->
    <footer>
        &copy; 2026 ISP Management System - All Rights Reserved.
    </footer>

</body>
</html>
