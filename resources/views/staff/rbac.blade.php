@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Halaman 14: Role-Based Access Control (RBAC)</h1>
        <div>
            <button type="button" style="padding: 8px 15px; background-color: #28a745; color: white; border: none; cursor: pointer;">Simpan Pengaturan Hak Akses</button>
        </div>
    </div>

    <p>Atur hak akses menu dan izin tindakan (Permissions) untuk setiap jabatan (Role) di dalam sistem.</p>

    <!-- Pilih Role yang akan diatur -->
    <div style="background-color: white; padding: 15px; border: 1px solid #ddd; margin-bottom: 20px;">
        <label style="font-weight: bold; margin-right: 10px;">Pilih Role Staff:</label>
        <select name="role_pilihan" style="padding: 6px; width: 250px;">
            <option value="finance">Finance / Kasir</option>
            <option value="teknisi">Teknisi Lapangan</option>
            <option value="cs" selected>Customer Service (CS)</option>
        </select>
    </div>

    <!-- Tabel Hak Akses (Matrix Permissions) -->
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white;">
        <thead>
            <tr style="background-color: #eee;">
                <th>Modul Sistem</th>
                <th>Lihat (View)</th>
                <th>Tambah (Create)</th>
                <th>Ubah (Edit)</th>
                <th>Hapus (Delete)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Modul Pelanggan</strong></td>
                <td><input type="checkbox" checked></td>
                <td><input type="checkbox" checked></td>
                <td><input type="checkbox" checked></td>
                <td><input type="checkbox"></td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td><strong>Modul Tagihan & Kasir</strong></td>
                <td><input type="checkbox" checked></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td><strong>Laporan Keuangan</strong></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td><strong>Tiket Gangguan</strong></td>
                <td><input type="checkbox" checked></td>
                <td><input type="checkbox" checked></td>
                <td><input type="checkbox" checked></td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td><strong>Manajemen Staff & Setting</strong></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
            </tr>
        </tbody>
    </table>
@endsection
