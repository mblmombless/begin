@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Detail Pelanggan: CUST-001</h1>
        <div>
            <a href="/pelanggan"><button type="button">Kembali ke Daftar</button></a>
            <a href="/pelanggan/form"><button type="button" style="background-color: #007bff; color: white;">Edit Data</button></a>
        </div>
    </div>

    <div style="background-color: white; padding: 20px; border: 1px solid #ddd;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px; font-weight: bold; width: 200px;">Nama Lengkap</td>
                <td style="padding: 10px;">: Ahmad Dahlan</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; font-weight: bold;">NIK (KTP)</td>
                <td style="padding: 10px;">: 331501234567890</td>
            </tr>
            <tr>
                <td style="padding: 10px; font-weight: bold;">WhatsApp / HP</td>
                <td style="padding: 10px;">: 081234567890</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; font-weight: bold;">Alamat Lengkap</td>
                <td style="padding: 10px;">: Jl. Raya Purwodadi No. 123, Grobogan</td>
            </tr>
            <tr>
                <td style="padding: 10px; font-weight: bold;">Paket Internet</td>
                <td style="padding: 10px;">: Home 20 Mbps</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; font-weight: bold;">Status Layanan</td>
                <td style="padding: 10px;"><span style="color: green; font-weight: bold;">Aktif</span></td>
            </tr>
        </table>
    </div>

    <h3 style="margin-top: 30px;">Riwayat Tagihan Terakhir</h3>
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; background-color: white;">
        <tr style="background-color: #eee;">
            <th>Bulan</th>
            <th>Tagihan</th>
            <th>Status</th>
            <th>Tgl Bayar</th>
        </tr>
        <tr>
            <td>Agustus 2026</td>
            <td>Rp 200.000</td>
            <td>Lunas</td>
            <td>10 Agu 2026</td>
        </tr>
    </table>
@endsection
