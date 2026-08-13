namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Jika nanti Anda sudah punya model Pelanggan atau Tiket, panggil di sini:
// use App\Models\Pelanggan;
// use App\Models\Tiket;

class DashboardController extends Controller
{
    public function index()
    {
        // Untuk tahap prototipe, kita bisa mengirim data sementara (dummy data)
        // Nanti nilai ini bisa diganti dengan mengambil data asli dari Database
        $data = [
            'pelanggan_aktif' => 320,
            'pelanggan_isolir' => 15,
            'pelanggan_nonaktif' => 8,
            'tiket_open' => 4,
            'bulan_aktif' => 'Agustus 2026'
        ];

        // Mengirim data ke view resources/views/dashboard.blade.php
        return view('dashboard', $data);
    }
}
