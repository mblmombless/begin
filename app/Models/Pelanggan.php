namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Menentukan nama tabel di database secara eksplisit (opsional jika namanya plural/jamak)
    protected $table = 'pelanggan';

    // Kolom-kolom yang diizinkan untuk diisi data (Mass Assignment)
    protected $fillable = [
        'id_pelanggan',
        'nama_lengkap',
        'nik',
        'whatsapp',
        'alamat',
        'koordinat',
        'paket_id',
        'device_identity',
        'status'
    ];
}
