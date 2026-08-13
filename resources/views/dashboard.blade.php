@extends('layouts.app')

@section('content')
    <h1>Beranda / Command Center ISP</h1>
    <p>Selamat datang kembali, <strong>Admin</strong>. Berikut adalah ringkasan kesehatan operasional dan finansial hari ini.</p>
    
    <!-- Filter Periode Global Dashboard -->
    <div style="background-color: #f1f1f1; padding: 10px; margin-bottom: 20px;">
        <label><strong>Periode Tampilan:</strong></label>
        <select name="periode_dashboard">
            <option value="bulan_ini" selected>{{ $bulan_aktif }}</option>
            <option value="bulan_lalu">Bulan Lalu</option>
            <option value="tahun_ini">Tahun Berjalan</option>
        </select>
        <button type="button">Terapkan</button>
    </div>

    <!-- 1. KARTU METRIK UTAMA (TOP CARDS) -->
    <div style="display: flex; gap: 15px; margin-bottom: 25px;">
        
        <!-- Card Pelanggan Aktif -->
        <div style="border: 1px solid #28a745; background-color: #e8f5e9; padding: 15px; width: 25%; text-align: center;">
            <h4 style="margin: 0; color: #2e7d32;">PELANGGAN AKTIF</h4>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0;">{{ $pelanggan_aktif }}</p>
            <small style="color: #555;">Internet Lancar / Normal</small>
        </div>

        <!-- Card Pelanggan Isolir -->
        <div style="border: 1px solid #dc3545; background-color: #ffebee; padding: 15px; width: 25%; text-align: center;">
            <h4 style="margin: 0; color: #c62828;">PELANGGAN ISOLIR</h4>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0;">{{ $pelanggan_isolir }}</p>
            <small style="color: #555;">Menunggak / Terblokir Sistem</small>
        </div>

        <!-- Card Pelanggan Non-Aktif -->
        <div style="border: 1px solid #6c757d; background-color: #f8f9fa; padding: 15px; width: 25%; text-align: center;">
            <h4 style="margin: 0; color: #495057;">NON-AKTIF / BERHENTI</h4>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0;">{{ $pelanggan_nonaktif }}</p>
            <small style="color: #555;">Terminated / Berhenti Langganan</small>
        </div>

        <!-- Card Tiket Gangguan Baru -->
        <div style="border: 1px solid #ffc107; background-color: #fff9c4; padding: 15px; width: 25%; text-align: center;">
            <h4 style="margin: 0; color: #f57f17;">TIKET GANGGUAN OPEN</h4>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0;">{{ $tiket_open }}</p>
            <small style="color: #555;">Perlu Tindakan CS / Teknisi</small>
        </div>

    </div>

    <!-- 2. SECTION QUICK ACTIONS (PINTASAN CEPAT) -->
    <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 25px; background-color: #fafafa;">
        <h3>Pintasan Aksi Cepat</h3>
        <a href="/pelanggan/form"><button type="button">+ Tambah Pelanggan Baru</button></a>
        <a href="/kasir"><button type="button">Proses Kasir / Pembayaran</button></a>
        <a href="/tiket"><button type="button">Buat Tiket Gangguan</button></a>
        <button type="button">Generate Tagihan Massal</button>
    </div>

    <!-- 3. SECTION GRAFIK ANALITIK -->
    <div style="display: flex; gap: 20px; margin-bottom: 25px;">
        <div style="border: 1px solid black; padding: 15px; width: 50%;">
            <h3>Grafik Peningkatan Keuangan (Pendapatan)</h3>
            <div style="border: 2px dashed #999; height: 180px; display: flex; align-items: center; justify-content: center; background-color: #f9f9f9;">
                <p>[ MOCKUP BAR CHART: Pendapatan Bulanan ]</p>
            </div>
        </div>

        <div style="border: 1px solid black; padding: 15px; width: 50%;">
            <h3>Grafik Pertumbuhan Customer (Growth)</h3>
            <div style="border: 2px dashed #999; height: 180px; display: flex; align-items: center; justify-content: center; background-color: #f9f9f9;">
                <p>[ MOCKUP LINE CHART: Tren Penambahan Pelanggan ]</p>
            </div>
        </div>
    </div>

    <!-- 4. TABEL AKTIVITAS TERAKHIR -->
    <h3>Aktivitas Terakhir di Sistem (Live Feed)</h3>
    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%;">
        <thead>
            <tr style="background-color: #eee;">
                <th>Waktu</th>
                <th>User / Staff</th>
                <th>Modul</th>
                <th>Deskripsi Aktivitas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>13 Agu 2026, 08:15</td>
                <td>Rian (Finance)</td>
                <td>Kasir / Tagihan</td>
                <td>Memproses pembayaran tunai tagihan INV/2026/08/046 (Budi Santoso) - LUNAS</td>
            </tr>
        </tbody>
    </table>
@endsection
