@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 20px;">
        <h1>Halaman 11: Activity Log (Jejak Aktivitas Staff)</h1>
        <p>Memantau seluruh tindakan yang dilakukan oleh staff atau admin di dalam sistem aplikasi.</p>
    </div>

    <!-- Filter Activity Log -->
    <form action="#" method="GET" style="background-color: white; padding: 15px; border: 1px solid #ddd; margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Cari nama staff / aktivitas..." style="padding: 6px; width: 240px;">
        <select name="modul" style="padding: 6px;">
            <option value="">Semua Modul</option>
            <option value="pelanggan">Pelanggan</option>
            <option value="tagihan">Tagihan & Kasir</option>
            <option value="tiket">Tiket Gangguan</option>
            <option value="settings">Settings</option>
        </select>
        <input type="date" name="tanggal" style="padding: 6px;">
        <button type="submit" style="padding: 7px 15px;">Filter Log</button>
    </form>

    <!-- Tabel Activity Log -->
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white;">
        <thead>
            <tr style="background-color: #eee;">
                <th>Waktu (Timestamp)</th>
                <th>Staff / User</th>
                <th>IP Address</th>
                <th>Modul</th>
                <th>Aksi / Keterangan Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>13 Agu 2026, 14:32:10</td>
                <td>Rian (Finance)</td>
                <td>192.168.1.45</td>
                <td>Kasir</td>
                <td>Memproses pembayaran tunai tagihan INV/2026/08/046 - Rp 200.000</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td>13 Agu 2026, 13:10:05</td>
                <td>Admin Utama</td>
                <td>192.168.1.10</td>
                <td>Pelanggan</td>
                <td>Mengubah data paket internet untuk CUST-002 (Dewi Lestari)</td>
            </tr>
            <tr>
                <td>13 Agu 2026, 10:20:15</td>
                <td>CS Siska</td>
                <td>192.168.1.22</td>
                <td>Tiket</td>
                <td>Membuat tiket gangguan baru #TKT-2026-089</td>
            </tr>
        </tbody>
    </table>
@endsection
