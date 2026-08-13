FILE CONSTRUCTION TREE

```text
isp-app/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── DashboardController.php   # (Opsional) Mengatur logika beranda
│   └── Models/
│       └── Pelanggan.php                 # Model database untuk tabel pelanggan
├── routes/
│   └── web.php                           # Tempat mendaftarkan rute URL (/dashboard, /pelanggan, dll)
└── resources/
    └── views/
        ├── layouts/
        │   └── app.blade.php             # Layout utama (Cangkang: Navbar, Sidebar, @yield)
        ├── dashboard.blade.php           # Potongan Halaman 1: Beranda / Command Center
        ├── pelanggan/
        │   ├── index.blade.php           # Potongan Halaman 2: Daftar Pelanggan
        │   ├── detail.blade.php          # Potongan Halaman 3: Detail / Profil Pelanggan
        │   └── form.blade.php            # Potongan Halaman 4: Form Tambah/Edit Pelanggan
        ├── tagihan/
        │   ├── index.blade.php           # Potongan Halaman 5: Daftar Tagihan (Invoice)
        │   └── kasir.blade.php           # Potongan Halaman 6: Kasir / Pembayaran Manual
        ├── keuangan/
        │   └── laporan.blade.php         # Potongan Halaman 7: Laporan Keuangan
        ├── peta/
        │   └── index.blade.php           # Potongan Halaman 8: Peta Infrastruktur & Pelanggan
        ├── tiket/
        │   ├── index.blade.php           # Potongan Halaman 9: Daftar Tiket / Gangguan
        │   └── detail.blade.php          # Potongan Halaman 10: Detail Penugasan Tiket
        ├── log/
        │   ├── activity.blade.php        # Potongan Halaman 11: Activity Log
        │   └── system.blade.php          # Potongan Halaman 12: System Log
        ├── staff/
        │   ├── index.blade.php           # Potongan Halaman 13: Manajemen Staff
        │   └── rbac.blade.php            # Potongan Halaman 14: Pengaturan Hak Akses (RBAC)
        ├── settings/
        │   └── index.blade.php           # Potongan Halaman 15: Konfigurasi Umum
        ├── chat/
        │   └── index.blade.php           # Potongan Halaman 16: WhatsApp Live Chat / Inbox CS
        └── paket/
            └── index.blade.php           # Potongan Halaman 17: Manajemen Paket Internet
```
