@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Halaman 17: Manajemen Paket Internet & Bandwidth</h1>
        <div>
            <button type="button" style="padding: 8px 15px; background-color: #28a745; color: white; border: none; cursor: pointer; font-weight: bold;">+ Tambah Paket Baru</button>
        </div>
    </div>

    <p>Kelola daftar paket layanan internet, kecepatan (Bandwidth Profile), serta harga bulanan untuk pelanggan.</p>

    <!-- Tabel Daftar Paket -->
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white; margin-top: 20px;">
        <thead>
            <tr style="background-color: #eee;">
                <th>ID Paket</th>
                <th>Nama Paket</th>
                <th>Kecepatan (Bandwidth)</th>
                <th>Harga Bulanan</th>
                <th>Profile MikroTik</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PKG-01</td>
                <td><strong>Home 20 Mbps</strong></td>
                <td>20 Mbps / 20 Mbps</td>
                <td>Rp 150.000</td>
                <td>pppoe-profile-20mbps</td>
                <td><span style="color: green; font-weight: bold;">Aktif</span></td>
                <td>
                    <button type="button">Edit</button>
                    <button type="button" style="color: red;">Hapus</button>
                </td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td>PKG-02</td>
                <td><strong>Home 50 Mbps</strong></td>
                <td>50 Mbps / 50 Mbps</td>
                <td>Rp 250.000</td>
                <td>pppoe-profile-50mbps</td>
                <td><span style="color: green; font-weight: bold;">Aktif</span></td>
                <td>
                    <button type="button">Edit</button>
                    <button type="button" style="color: red;">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>PKG-03</td>
                <td><strong>Dedicated 100 Mbps</strong></td>
                <td>100 Mbps / 100 Mbps</td>
                <td>Rp 750.000</td>
                <td>pppoe-profile-100mbps</td>
                <td><span style="color: green; font-weight: bold;">Aktif</span></td>
                <td>
                    <button type="button">Edit</button>
                    <button type="button" style="color: red;">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection

