@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Halaman 15: Konfigurasi Umum & Pengaturan Sistem</h1>
        <div>
            <button type="button" style="padding: 8px 15px; background-color: #28a745; color: white; border: none; cursor: pointer; font-weight: bold;">Simpan Perubahan</button>
        </div>
    </div>

    <p>Atur parameter dasar aplikasi, integrasi perangkat MikroTik, dan gateway notifikasi.</p>

    <form action="/settings/update" method="POST" style="background-color: white; padding: 25px; border: 1px solid #ddd;">
        @csrf

        <h3>1. Informasi Umum ISP</h3>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nama Perusahaan / ISP</label>
            <input type="text" name="nama_isp" value="PT. Lentera Solusi Internet" style="padding: 8px; width: 100%;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Alamat Kantor Pusat</label>
            <textarea name="alamat_isp" rows="2" style="padding: 8px; width: 100%;">Jl. Diponegoro No. 45, Purwodadi, Grobogan</textarea>
        </div>
        <div style="margin-bottom: 25px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nomor Layanan Pelanggan (CS Hotline)</label>
            <input type="text" name="cs_hotline" value="081234567899" style="padding: 8px; width: 100%;">
        </div>

        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">

        <h3>2. Integrasi MikroTik Core Router</h3>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">IP Address Router</label>
            <input type="text" name="mikrotik_ip" value="192.168.88.1" style="padding: 8px; width: 100%;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">API Port</label>
            <input type="text" name="mikrotik_port" value="8728" style="padding: 8px; width: 100%;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Username Router</label>
            <input type="text" name="mikrotik_user" value="admin" style="padding: 8px; width: 100%;">
        </div>
        <div style="margin-bottom: 25px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Password Router</label>
            <input type="password" name="mikrotik_pass" value="********" style="padding: 8px; width: 100%;">
        </div>

        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">

        <h3>3. Konfigurasi Gateway WhatsApp (Notifikasi)</h3>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">API Provider / Gateway URL</label>
            <input type="text" name="wa_url" value="https://api.whatsapp-gateway.local/send" style="padding: 8px; width: 100%;">
        </div>
        <div style="margin-bottom: 20px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">API Secret Key</label>
            <input type="text" name="wa_key" value="secret_token_xyz987" style="padding: 8px; width: 100%;">
        </div>

        <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; cursor: pointer; font-weight: bold;">Simpan Konfigurasi</button>
    </form>
@endsection
