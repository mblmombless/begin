@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 20px;">
        <h1>Halaman 16: WhatsApp Live Chat / CS Inbox</h1>
        <p>Pusat layanan pelanggan interaktif untuk membalas pesan masuk dari WhatsApp secara real-time.</p>
    </div>

    <!-- Layout Dua Kolom (Daftar Kontak & Ruang Chat) -->
    <div style="display: flex; height: 500px; border: 1px solid #ddd; background-color: white;">
        
        <!-- KOLOM KIRI: DAFTAR PERCAKAPAN (INBOX) -->
        <div style="width: 35%; border-right: 1px solid #ddd; overflow-y: auto;">
            <div style="padding: 15px; border-bottom: 1px solid #eee; background-color: #f8f9fa;">
                <input type="text" name="cari_chat" placeholder="Cari pesan / nomor HP..." style="padding: 6px; width: 100%;">
            </div>

            <!-- List Item Chat 1 (Aktif) -->
            <div style="padding: 15px; border-bottom: 1px solid #eee; background-color: #e3f2fd; cursor: pointer;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                    <strong>Dewi Lestari (CUST-002)</strong>
                    <small style="color: #666;">10:25</small>
                </div>
                <p style="margin: 0; font-size: 13px; color: #444; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    Min, kenapa lampu LOS di modem saya kedip merah ya?
                </p>
            </div>

            <!-- List Item Chat 2 -->
            <div style="padding: 15px; border-bottom: 1px solid #eee; cursor: pointer;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                    <strong>Ahmad Dahlan (CUST-001)</strong>
                    <small style="color: #666;">Kemarin</small>
                </div>
                <p style="margin: 0; font-size: 13px; color: #666; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    Baik admin, terima kasih info tagihannya.
                </p>
            </div>
        </div>

        <!-- KOLOM KANAN: RUANG PERCAKAPAN (CHAT ROOM) -->
        <div style="width: 65%; display: flex; flex-direction: column;">
            
            <!-- Header Chat Room -->
            <div style="padding: 15px; border-bottom: 1px solid #ddd; background-color: #f8f9fa; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h4 style="margin: 0;">Dewi Lestari - 085678901234</h4>
                    <small style="color: green;">Online - Paket: Home 50 Mbps</small>
                </div>
                <button type="button" style="padding: 5px 10px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 4px;">Buat Tiket dari Chat</button>
            </div>

            <!-- Area Gelembung Pesan (Message Bubble) -->
            <div style="flex: 1; padding: 20px; overflow-y: auto; background-color: #f4f6f9; display: flex; flexDirection: column; gap: 15px;">
                
                <!-- Pesan dari Pelanggan -->
                <div style="background-color: white; padding: 10px 15px; border-radius: 8px; max-width: 70%; border: 1px solid #ddd; align-self: flex-start;">
                    <p style="margin: 0; font-size: 14px;">Min, kenapa lampu LOS di modem saya kedip merah ya? Internet mati total.</p>
                    <small style="font-size: 11px; color: #777; margin-top: 5px; display: block;">10:25</small>
                </div>

                <!-- Pesan Balasan dari CS / Admin -->
                <div style="background-color: #dcf8c6; padding: 10px 15px; border-radius: 8px; max-width: 70%; border: 1px solid #c3e6cb; align-self: flex-end;">
                    <p style="margin: 0; font-size: 14px;">Halo Kak Dewi, mohon maaf atas ketidaknyamanannya. Tim teknisi kami akan segera mengecek jalur area rumah Kakak ya.</p>
                    <small style="font-size: 11px; color: #555; margin-top: 5px; display: block; text-align: right;">10:28</small>
                </div>

            </div>

            <!-- Form Kirim Pesan -->
            <form action="/chat/kirim" method="POST" style="padding: 15px; border-top: 1px solid #ddd; background-color: white; display: flex; gap: 10px;">
                @csrf
                <input type="hidden" name="nomor_tujuan" value="085678901234">
                <input type="text" name="pesan" placeholder="Ketik balasan WhatsApp di sini..." style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
                <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; cursor: pointer; border-radius: 4px; font-weight: bold;">Kirim Pesan</button>
            </form>

        </div>

    </div>
@endsection
