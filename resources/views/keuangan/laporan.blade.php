@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Halaman 7: Laporan Keuangan ISP</h1>
        <div>
            <button type="button" style="padding: 8px 15px; background-color: #dc3545; color: white; border: none; cursor: pointer;">Cetak PDF / Export Excel</button>
        </div>
    </div>

    <!-- Filter Periode Laporan -->
    <form action="#" method="GET" style="margin-bottom: 20px; background-color: white; padding: 15px; border: 1px solid #ddd;">
        <label style="font-weight: bold; margin-right: 10px;">Rentang Laporan:</label>
        <select name="bulan" style="padding: 6px;">
            <option value="08-2026" selected>Agustus 2026</option>
            <option value="07-2026">Juli 2026</option>
            <option value="06-2026">Juni 2026</option>
        </select>
        <button type="submit" style="padding: 7px 15px;">Tampilkan Laporan</button>
    </form>

    <!-- Ringkasan Keuangan (Kredit / Debit / Saldo) -->
    <div style="display: flex; gap: 20px; margin-bottom: 25px;">
        <div style="border: 1px solid #28a745; background-color: #e8f5e9; padding: 15px; width: 33%; text-align: center;">
            <h4 style="margin: 0; color: #2e7d32;">TOTAL PEMASUKAN (INCOME)</h4>
            <p style="font-size: 22px; font-weight: bold; margin: 10px 0; color: #2e7d32;">Rp 64.000.000</p>
            <small>Dari pembayaran tagihan & aktivasi</small>
        </div>

        <div style="border: 1px solid #dc3545; background-color: #ffebee; padding: 15px; width: 33%; text-align: center;">
            <h4 style="margin: 0; color: #c62828;">TOTAL PENGELUARAN (EXPENSE)</h4>
            <p style="font-size: 22px; font-weight: bold; margin: 10px 0; color: #c62828;">Rp 18.500.000</p>
            <small>Bandwidth upstream, operasional, gaji</small>
        </div>

        <div style="border: 1px solid #007bff; background-color: #e3f2fd; padding: 15px; width: 33%; text-align: center;">
            <h4 style="margin: 0; color: #0d47a1;">SALDO BERSIH (PROFIT)</h4>
            <p style="font-size: 22px; font-weight: bold; margin: 10px 0; color: #0d47a1;">Rp 45.500.000</p>
            <small>Pemasukan dikurangi pengeluaran</small>
        </div>
    </div>

    <!-- Tabel Rincian Arus Kas -->
    <h3>Rincian Transaksi Keuangan</h3>
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white;">
        <thead>
            <tr style="background-color: #eee;">
                <th>Tanggal</th>
                <th>Keterangan / Uraian</th>
                <th>Kategori</th>
                <th>Masuk (Debit)</th>
                <th>Keluar (Kredit)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01 Agu 2026</td>
                <td>Pembayaran Tagihan Kolektif Pelanggan Area Sidoarjo</td>
                <td><span style="color: green;">Pemasukan</span></td>
                <td>Rp 4.500.000</td>
                <td>-</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td>05 Agu 2026</td>
                <td>Bayar Bandwidth Upstream Provider Telkom / ICON+</td>
                <td><span style="color: red;">Pengeluaran</span></td>
                <td>-</td>
                <td>Rp 12.000.000</td>
            </tr>
            <tr>
                <td>10 Agu 2026</td>
                <td>Pembayaran Tunai Langsung via Kasir (Budi Santoso)</td>
                <td><span style="color: green;">Pemasukan</span></td>
                <td>Rp 200.000</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
@endsection
