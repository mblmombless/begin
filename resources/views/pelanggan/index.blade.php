@extends('layouts.app')

@section('content')
    <h1>Halaman 2: Daftar Pelanggan</h1>
    
    <!-- Bar Pencarian & Filter -->
    <form action="#" method="GET" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Cari nama/ID/no HP..." style="padding: 5px; width: 200px;">
        <select name="filter_status" style="padding: 5px;">
            <option value="">Semua Status</option>
            <option value="aktif">Aktif</option>
            <option value="isolir">Isolir</option>
            <option value="berhenti">Berhenti</option>
        </select>
        <button type="submit" style="padding: 6px 12px;">Cari / Filter</button>
        <a href="/pelanggan/form" style="margin-left: 10px;">
            <button type="button" style="padding: 6px 12px; background-color: #28a745; color: white; border: none; cursor: pointer;">+ Tambah Pelanggan Baru</button>
        </a>
    </form>

    <!-- Tabel Pelanggan -->
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white;">
        <thead>
            <tr style="background-color: #eee;">
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>No. HP / WhatsApp</th>
                <th>Paket Internet</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>CUST-001</td>
                <td>Ahmad Dahlan</td>
                <td>081234567890</td>
                <td>Home 20 Mbps</td>
                <td><span style="color: green; font-weight: bold;">Aktif</span></td>
                <td>
                    <a href="/pelanggan/detail"><button type="button">Detail</button></a>
                    <a href="/pelanggan/form"><button type="button">Edit</button></a>
                    <button type="button" style="color: red;">Isolir</button>
                </td>
            </tr>
            <tr>
                <td>CUST-002</td>
                <td>Dewi Lestari</td>
                <td>085678901234</td>
                <td>Home 50 Mbps</td>
                <td><span style="color: orange; font-weight: bold;">Isolir</span></td>
                <td>
                    <a href="/pelanggan/detail"><button type="button">Detail</button></a>
                    <a href="/pelanggan/form"><button type="button">Edit</button></a>
                    <button type="button" style="color: green;">Buka Isolir</button>
                </td>
            </tr>
        </tbody>
    </table>
    
    <!-- Paginasi -->
    <div style="margin-top: 15px;">
        <p>Halaman: <strong>1</strong> dari 10 | 
            <button type="button">Sebelumnya</button> 
            <button type="button">Berikutnya</button>
        </p>
    </div>
@endsection
