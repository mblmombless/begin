@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Halaman 5: Daftar Tagihan & Invoice</h1>
        <div>
            <a href="/kasir"><button type="button" style="background-color: #28a745; color: white; padding: 8px 15px; border: none; cursor: pointer;">+ Buka Kasir Pembayaran</button></a>
        </div>
    </div>

    <!-- Bar Pencarian & Filter Tagihan -->
    <form action="#" method="GET" style="margin-bottom: 20px; background-color: white; padding: 15px; border: 1px solid #ddd;">
        <input type="text" name="search" placeholder="Cari No Invoice / Nama..." style="padding: 6px; width: 220px;">
        <select name="status_bayar" style="padding: 6px;">
            <option value="">Semua Status Bayar</option>
            <option value="lunas">Lunas</option>
            <option value="belum_lunas">Belum Lunas (Pending)</option>
            <option value="jatuh_tempo">Jatuh Tempo</option>
        </select>
        <select name="bulan" style="padding: 6px;">
            <option value="08-2026">Agustus 2026</option>
            <option value="07-2026">Juli 2026</option>
        </select>
        <button type="submit" style="padding: 7px 15px;">Filter Data</button>
    </form>

    <!-- Tabel Daftar Tagihan -->
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white;">
        <thead>
            <tr style="background-color: #eee;">
                <th>No. Invoice</th>
                <th>ID & Nama Pelanggan</th>
                <th>Periode</th>
                <th>Nominal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>INV/2026/08/046</td>
                <td>CUST-001 - Ahmad Dahlan</td>
                <td>Agustus 2026</td>
                <td>Rp 200.000</td>
                <td><span style="color: green; font-weight: bold;">Lunas</span></td>
                <td>
                    <button type="button">Cetak / Lihat PDF</button>
                    <button type="button">Kirim WhatsApp</button>
                </td>
            </tr>
            <tr>
                <td>INV/2026/08/047</td>
                <td>CUST-002 - Dewi Lestari</td>
                <td>Agustus 2026</td>
                <td>Rp 250.000</td>
                <td><span style="color: red; font-weight: bold;">Belum Lunas</span></td>
                <td>
                    <a href="/kasir"><button type="button" style="background-color: #007bff; color: white;">Bayar (Kasir)</button></a>
                    <button type="button">Kirim Pengingat</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Paginasi -->
    <div style="margin-top: 15px;">
        <p>Menampilkan 1-2 dari total 320 tagihan | 
            <button type="button">Sebelumnya</button> 
            <button type="button">Berikutnya</button>
        </p>
    </div>
@endsection
