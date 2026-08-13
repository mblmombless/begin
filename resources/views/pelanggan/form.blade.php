@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 20px;">
        <h1>Form Pelanggan (Tambah / Edit)</h1>
        <p>Silakan isi data diri pelanggan dengan lengkap dan benar.</p>
    </div>

    <!-- Form Input Data Pelanggan -->
    <form action="/pelanggan/simpan" method="POST" style="background-color: white; padding: 25px; border: 1px solid #ddd; max-width: 800px;">
        @csrf <!-- Token Keamanan wajib di Laravel untuk form POST -->

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">ID Pelanggan</label>
            <input type="text" name="id_pelanggan" value="CUST-003" readonly style="padding: 8px; width: 100%; background-color: #e9ecef;">
            <small style="color: #666;">ID dibuat otomatis oleh sistem.</small>
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" placeholder="Contoh: Budi Santoso" required style="padding: 8px; width: 100%;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">NIK (KTP)</label>
            <input type="text" name="nik" placeholder="Nomor Induk Kependudukan" style="padding: 8px; width: 100%;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">No. WhatsApp / HP</label>
            <input type="text" name="whatsapp" placeholder="Contoh: 081234567890" required style="padding: 8px; width: 100%;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Alamat Lengkap</label>
            <textarea name="alamat" rows="3" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan" style="padding: 8px; width: 100%;"></textarea>
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Pilih Paket Internet</label>
            <select name="paket_id" style="padding: 8px; width: 100%;">
                <option value="">-- Pilih Paket --</option>
                <option value="1">Home 20 Mbps - Rp 150.000</option>
                <option value="2">Home 50 Mbps - Rp 250.000</option>
                <option value="3">Dedicated 100 Mbps - Rp 750.000</option>
            </select>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Status Layanan</label>
            <select name="status" style="padding: 8px; width: 100%;">
                <option value="aktif">Aktif</option>
                <option value="isolir">Isolir</option>
                <option value="berhenti">Berhenti / Non-Aktif</option>
            </select>
        </div>

        <!-- Tombol Aksi -->
        <div>
            <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; cursor: pointer; font-weight: bold;">Simpan Data</button>
            <a href="/pelanggan" style="margin-left: 10px; text-decoration: none;">
                <button type="button" style="padding: 10px 20px; background-color: #6c757d; color: white; border: none; cursor: pointer;">Batal</button>
            </a>
        </div>
    </form>
@endsection
