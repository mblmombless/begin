@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 20px;">
        <h1>Halaman 6: Kasir / Pembayaran Manual</h1>
        <p>Gunakan halaman ini untuk memproses pembayaran tagihan pelanggan secara langsung (Tunai / Transfer).</p>
    </div>

    <div style="display: flex; gap: 20px;">
        <!-- KIRI: FORM PEMBAYARAN -->
        <div style="flex: 2; background-color: white; padding: 20px; border: 1px solid #ddd;">
            <h3>Form Input Pembayaran</h3>
            <form action="/kasir/proses" method="POST">
                @csrf

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Cari No. Invoice / Pelanggan</label>
                    <input type="text" name="cari_invoice" placeholder="Ketik nomor invoice atau nama..." value="INV/2026/08/047" style="padding: 8px; width: 70%;">
                    <button type="button" style="padding: 8px 15px;">Cari</button>
                </div>

                <div style="background-color: #f8f9fa; padding: 15px; border: 1px solid #eee; margin-bottom: 15px;">
                    <p style="margin: 5px 0;"><strong>Pelanggan:</strong> CUST-002 - Dewi Lestari</p>
                    <p style="margin: 5px 0;"><strong>Paket:</strong> Home 50 Mbps</p>
                    <p style="margin: 5px 0;"><strong>Periode Tagihan:</strong> Agustus 2026</p>
                    <p style="margin: 5px 0; font-size: 16px; color: #d9534f;"><strong>Total Tagihan: Rp 250.000</strong></p>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Metode Pembayaran</label>
                    <select name="metode_pembayaran" style="padding: 8px; width: 100%;">
                        <option value="tunai">Tunai (Cash)</option>
                        <option value="transfer_bca">Transfer Bank BCA</option>
                        <option value="transfer_bri">Transfer Bank BRI</option>
                        <option value="qris">QRIS / E-Wallet</option>
                    </select>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Jumlah Bayar</label>
                    <input type="number" name="jumlah_bayar" value="250000" style="padding: 8px; width: 100%;" required>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Catatan Tambahan (Opsional)</label>
                    <textarea name="catatan" rows="2" placeholder="Catatan transaksi..." style="padding: 8px; width: 100%;"></textarea>
                </div>

                <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; cursor: pointer; font-weight: bold;">Proses Pembayaran & Cetak Kuitansi</button>
            </form>
        </div>

        <!-- KANAN: RIWAYAT TRANSAKSI KASIR HARI INI -->
        <div style="flex: 1; background-color: white; padding: 20px; border: 1px solid #ddd;">
            <h3>Transaksi Hari Ini</h3>
            <ul style="padding-left: 15px; font-size: 14px; line-height: 1.6;">
                <li>
                    <strong>08:15</strong> - CUST-001 <br>
                    <span style="color: green;">Rp 200.000 (Tunai) - Lunas</span>
                </li>
                <hr style="border: 0; border-top: 1px solid #eee; margin: 10px 0;">
                <li>
                    <strong>09:30</strong> - CUST-012 <br>
                    <span style="color: green;">Rp 150.000 (BCA) - Lunas</span>
                </li>
            </ul>
        </div>
    </div>
@endsection
