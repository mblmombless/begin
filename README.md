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
```text
# Sistem Manajemen ISP (Internet Service Provider)

Dokumentasi ini merangkum arsitektur, fitur, dan panduan integrasi sistem manajemen pelanggan dan infrastruktur ISP yang dirancang dengan prinsip performa tinggi dan keamanan data.

## 🚀 Fitur Utama & Optimasi Sistem

### 1. Performa & Pengelolaan Data
* Server-Side Pagination: Memecah data besar di database agar pengiriman data ke frontend efisien dan ringan.
* Infinite Scrolling / Virtualization: Teknik perenderan komponen yang hanya memproses data yang terlihat di layar.
* Server-Side Filtering & Searching: Proses pencarian data dilakukan di sisi database untuk mengurangi beban memori browser.
* Client-Side Caching: Penggunaan TanStack Query atau SWR untuk mengelola fetching, caching, dan sinkronisasi data server secara otomatis.

### 2. Keamanan & Arsitektur
* Data Minimization: Memastikan hanya data yang diperlukan yang dikirim ke klien.
* Secure Access: Implementasi RBAC (Role-Based Access Control) dan JWT (JSON Web Token) untuk membedakan hak akses (Superadmin, Finance, CS, Teknisi).
* Optimasi UX: Implementasi Skeleton Loader dengan transisi fade-in (<0,3 detik) untuk mencegah layout shift dan memberikan pengalaman pengguna yang mulus.

---

## 📋 Daftar Modul Sistem (17 Halaman)

| Modul | Deskripsi |
| :--- | :--- |
| Core | Dashboard Utama (Executive Summary, Statistik, Quick Actions) |
| Pelanggan | Manajemen data pelanggan, profil, riwayat, & integrasi PPPoE Mikrotik |
| Keuangan | Daftar tagihan, manajemen invoice, kasir manual, & laporan keuangan |
| Infrastruktur | Peta sebaran pelanggan & titik koordinat ODP |
| Tiket/Gangguan | Manajemen keluhan & update progres penugasan teknisi |
| Log & Monitoring | Audit trail aktivitas user & monitoring teknis server (Mikrotik API, Webhook, Cron) |
| Admin & Setting | Manajemen staff, konfigurasi RBAC, & pengaturan global sistem |
| Tambahan | WhatsApp Live Chat (CS Dashboard) & Manajemen Paket Internet |

---

## ⚙️ Panduan Integrasi & Konfigurasi

### A. Library Internal (Backend/Frontend)
Library berikut di-instal melalui package manager (npm / composer) secara langsung di proyek:
* RouterOS API Client: Komunikasi langsung dengan perangkat Mikrotik.
* JWT: Autentikasi dan keamanan sesi user.
* Bcrypt: Hashing password untuk keamanan database.
* Exporter: Library untuk cetak laporan (PDF/Excel/Kwitansi).
* UI/Animation: TanStack Table, Tailwind CSS, & Framer Motion.

### B. Konfigurasi Lokal (.env)
Pengaturan yang didefinisikan secara manual di file environment:
* Database: Host, username, password, & nama database.
* Mikrotik: IP Router, Port API (8728), Username, & Password.
* Security: JWT_SECRET_KEY & APP_ENV.

### C. Layanan Eksternal (API Pihak Ketiga)
Layanan yang memerlukan registrasi akun di luar sistem:
* WhatsApp Gateway: (Contoh: Fonnte, Wablas, atau Meta Cloud API) untuk notifikasi otomatis.
* Maps API: Google Maps API (untuk peta) atau OpenStreetMap/Leaflet (opsi gratis).
* Payment Gateway: (Contoh: Midtrans, Xendit) untuk sistem pembayaran online/QRIS.

---

## 🛠 Teknologi yang Digunakan
* Backend: [Sebutkan teknologi backend Anda, misal: Node.js/PHP/Go]
* Frontend: React.js, Tailwind CSS, TanStack Query
* Database: MySQL / PostgreSQL
* Infrastruktur: Mikrotik RouterOS API

Dokumen ini dibuat sebagai panduan pengembangan arsitektur sistem ISP untuk memastikan performa yang stabil dan skalabilitas di masa depan.
```
