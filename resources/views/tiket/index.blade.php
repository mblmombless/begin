@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Halaman 9: Daftar Tiket Gangguan / Komplain</h1>
        <div>
            <button type="button" style="padding: 8px 15px; background-color: #28a745; color: white; border: none; cursor: pointer;">+ Buat Tiket Baru</button>
        </div>
    </div>

    <!-- Filter Tiket -->
    <form action="#" method="GET" style="background-color: white; padding: 15px; border: 1px solid #ddd; margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Cari No Tiket / Nama Pelanggan..." style="padding: 6px; width: 240px;">
        <select name="status_tiket" style="padding: 6px;">
            <option value="">Semua Status Tiket</option>
            <option value="open">Open (Baru)</option>
            <option value="process">In Progress (Dikerjakan Teknisi)</option>
            <option value="resolved">Resolved (Selesai)</option>
        </select>
        <select name="prioritas" style="padding: 6px;">
            <option value="">Semua Prioritas</option>
            <option value="tinggi">Tinggi / Urgent</option>
            <option value="sedang">Sedang</option>
            <option value="rendah">Rendah</option>
        </select>
        <button type="submit" style="padding: 7px 15px;">Filter Data</button>
    </form>

    <!-- Tabel Daftar Tiket -->
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white;">
        <thead>
            <tr style="background-color: #eee;">
                <th>No. Tiket</th>
                <th>Waktu Laporan</th>
                <th>Pelanggan</th>
                <th>Kendala / Keluhan</th>
                <th>Prioritas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TKT-2026-089</td>
                <td>13 Agu 2026, 10:20</td>
                <td>CUST-002 - Dewi Lestari</td>
                <td>Koneksi internet mati total lampu LOS merah di modem</td>
                <td><span style="color: red; font-weight: bold;">Tinggi</span></td>
                <td><span style="color: orange; font-weight: bold;">In Progress</span></td>
                <td>
                    <a href="/tiket/detail"><button type="button">Detail & Penugasan</button></a>
                </td>
            </tr>
            <tr>
                <td>TKT-2026-088</td>
                <td>12 Agu 2026, 14:10</td>
                <td>CUST-015 - Hendra Gunawan</td>
                <td>WiFi lambat saat malam hari</td>
                <td><span style="color: green; font-weight: bold;">Rendah</span></td>
                <td><span style="color: green; font-weight: bold;">Resolved</span></td>
                <td>
                    <a href="/tiket/detail"><button type="button">Detail</button></a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
