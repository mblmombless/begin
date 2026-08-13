@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Halaman 13: Manajemen Staff & Pengguna Internal</h1>
        <div>
            <button type="button" style="padding: 8px 15px; background-color: #28a745; color: white; border: none; cursor: pointer;">+ Tambah Staff Baru</button>
        </div>
    </div>

    <!-- Filter Staff -->
    <form action="#" method="GET" style="background-color: white; padding: 15px; border: 1px solid #ddd; margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Cari nama staff / email..." style="padding: 6px; width: 240px;">
        <select name="role" style="padding: 6px;">
            <option value="">Semua Role / Jabatan</option>
            <option value="admin">Administrator</option>
            <option value="finance">Finance / Kasir</option>
            <option value="cs">Customer Service</option>
            <option value="teknisi">Teknisi Lapangan</option>
        </select>
        <select name="status" style="padding: 6px;">
            <option value="">Semua Status</option>
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Non-Aktif</option>
        </select>
        <button type="submit" style="padding: 7px 15px;">Filter Data</button>
    </form>

    <!-- Tabel Daftar Staff -->
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white;">
        <thead>
            <tr style="background-color: #eee;">
                <th>ID / Nama Staff</th>
                <th>Email / Kontak</th>
                <th>Role / Jabatan</th>
                <th>Area Tugas</th>
                <th>Status Akun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Rian Hidayat</strong><br><small>STF-001</small></td>
                <td>rian@isp.net<br>081234567891</td>
                <td><span style="background-color: #e3f2fd; color: #0d47a1; padding: 3px 8px; border-radius: 4px; font-size: 12px; font-weight: bold;">Finance</span></td>
                <td>Kantor Pusat (Kasir)</td>
                <td><span style="color: green; font-weight: bold;">Aktif</span></td>
                <td>
                    <button type="button">Edit</button>
                    <button type="button" style="color: red;">Nonaktifkan</button>
                </td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td><strong>Bambang Susilo</strong><br><small>STF-002</small></td>
                <td>bambang@isp.net<br>085678901235</td>
                <td><span style="background-color: #fff9c4; color: #f57f17; padding: 3px 8px; border-radius: 4px; font-size: 12px; font-weight: bold;">Teknisi</span></td>
                <td>Area Kota & Utara</td>
                <td><span style="color: green; font-weight: bold;">Aktif</span></td>
                <td>
                    <button type="button">Edit</button>
                    <button type="button" style="color: red;">Nonaktifkan</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
