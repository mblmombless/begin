@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Halaman 10: Detail & Penugasan Tiket #TKT-2026-089</h1>
        <div>
            <a href="/tiket"><button type="button">Kembali ke Daftar Tiket</button></a>
        </div>
    </div>

    <!-- Informasi Utama Tiket -->
    <div style="display: flex; gap: 20px; margin-bottom: 25px;">
        <!-- Kiri: Data Komplain -->
        <div style="flex: 1; background-color: white; padding: 20px; border: 1px solid #ddd;">
            <h3>Informasi Komplain</h3>
            <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
                <tr>
                    <td style="padding: 8px; font-weight: bold; width: 130px;">Pelanggan</td>
                    <td style="padding: 8px;">: CUST-002 - Dewi Lestari</td>
                </tr>
                <tr style="background-color: #f9f9f9;">
                    <td style="padding: 8px; font-weight: bold;">No. WhatsApp</td>
                    <td style="padding: 8px;">: 085678901234</td>
                </tr>
                <tr>
                    <td style="padding: 8px; font-weight: bold;">Waktu Lapor</td>
                    <td style="padding: 8px;">: 13 Agu 2026, 10:20</td>
                </tr>
                <tr style="background-color: #f9f9f9;">
                    <td style="padding: 8px; font-weight: bold;">Keluhan</td>
                    <td style="padding: 8px; color: #d9534f; font-weight: bold;">: Koneksi internet mati total lampu LOS merah di modem</td>
                </tr>
            </table>
        </div>

        <!-- Kanan: Penugasan Teknisi & Update Status -->
        <div style="flex: 1; background-color: white; padding: 20px; border: 1px solid #ddd;">
            <h3>Penugasan & Status</h3>
            <form action="/tiket/update" method="POST">
                @csrf
                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Assign Teknisi</label>
                    <select name="teknisi_id" style="padding: 8px; width: 100%;">
                        <option value="1">Joko (Teknisi Area Utara)</option>
                        <option value="2" selected>Bambang (Teknisi Area Kota)</option>
                        <option value="3">Agus (Teknisi Maintenance)</option>
                    </select>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Status Tiket</label>
                    <select name="status" style="padding: 8px; width: 100%;">
                        <option value="open">Open (Baru)</option>
                        <option value="process" selected>In Progress (Dikerjakan)</option>
                        <option value="resolved">Resolved (Selesai)</option>
                    </select>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Catatan Penanganan / Solusi</label>
                    <textarea name="catatan_teknisi" rows="2" placeholder="Ketik tindakan yang dilakukan..." style="padding: 8px; width: 100%;">Teknisi sedang meluncur ke lokasi untuk perbaikan kabel dropcore putus.</textarea>
                </div>

                <button type="submit" style="padding: 8px 15px; background-color: #007bff; color: white; border: none; cursor: pointer; font-weight: bold;">Simpan Perubahan Tiket</button>
            </form>
        </div>
    </div>
@endsection
