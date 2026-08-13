use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Halaman Utama & Dashboard (Menggunakan DashboardController)
Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

// Modul Pelanggan (Halaman 2, 3, 4)
Route::get('/pelanggan', function () {
    return view('pelanggan.index');
});
Route::get('/pelanggan/detail', function () {
    return view('pelanggan.detail');
});
Route::get('/pelanggan/form', function () {
    return view('pelanggan.form');
});

// Modul Tagihan & Kasir (Halaman 5 & 6)
Route::get('/tagihan', function () {
    return view('tagihan.index');
});
Route::get('/kasir', function () {
    return view('tagihan.kasir');
});

// Laporan Keuangan (Halaman 7)
Route::get('/keuangan/laporan', function () {
    return view('keuangan.laporan');
});

// Peta Infrastruktur (Halaman 8)
Route::get('/peta', function () {
    return view('peta.index');
});

// Modul Tiket Gangguan (Halaman 9 & 10)
Route::get('/tiket', function () {
    return view('tiket.index');
});
Route::get('/tiket/detail', function () {
    return view('tiket.detail');
});

// System & Activity Log (Halaman 11 & 12)
Route::get('/log/activity', function () {
    return view('log.activity');
});
Route::get('/log/system', function () {
    return view('log.system');
});

// Manajemen Staff & RBAC (Halaman 13 & 14)
Route::get('/staff', function () {
    return view('staff.index');
});
Route::get('/staff/rbac', function () {
    return view('staff.rbac');
});

// Konfigurasi Umum / Settings (Halaman 15)
Route::get('/settings', function () {
    return view('settings.index');
});

// WhatsApp Live Chat / CS Inbox (Halaman 16)
Route::get('/chat', function () {
    return view('chat.index');
});

// Manajemen Paket Internet (Halaman 17)
Route::get('/paket', function () {
    return view('paket.index');
});
