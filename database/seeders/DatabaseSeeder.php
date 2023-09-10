<?php

namespace Database\Seeders;

use App\Models\Kategoribeasiswa;
use App\Models\Kategorigalangdana;
use App\Models\payment;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an admin user with the role of "admin"
        $admin = User::create([
            'name' => 'John Doe',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'roles' => 1,
        ]);

        // Create a user with the role of "user"
        $user = User::create([
            'name' => 'Jane Doe',
            'email' => 'qiqikan87@gmail.com',
            'password' => Hash::make('password'),
            'roles' => 0,
        ]);



        $kategorisBeasiswa = [
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Sains dan Teknologi',
                'judul_kategoribeasiswa' => 'Beasiswa Riset Komputer',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang mengkhususkan diri di bidang riset komputer.',
                'syarat_beasiswa' => "Sedang menempuh pendidikan Strata 1/Diploma 4 di semester IV, dari semua disiplin ilmu.\nIPK minimum 3.00 pada semester III, serta dapat mempertahankan IPK minimum 3.00 hingga akhir semester IV.\nAktif mengikuti kegiatan organisasi baik di dalam maupun luar kampus.",
                'tanggal_pendaftaranawal' => '2023-08-01',
                'tanggal_pendaftaranakhir' => '2023-08-31',
                'tanggal_wawancara' => '2023-09-10',
                'tanggal_pengumuman' => '2023-09-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Seni dan Budaya',
                'judul_kategoribeasiswa' => 'Beasiswa Tari Tradisional',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang memiliki bakat di bidang tari tradisional daerah.',
                'syarat_beasiswa' => "Sedang menempuh pendidikan Strata 1/Diploma 4 di semester IV, dari semua disiplin ilmu.\nIPK minimum 3.00 pada semester III, serta dapat mempertahankan IPK minimum 3.00 hingga akhir semester IV.\nAktif mengikuti kegiatan organisasi baik di dalam maupun luar kampus.",
                'tanggal_pendaftaranawal' => '2023-09-01',
                'tanggal_pendaftaranakhir' => '2023-09-30',
                'tanggal_wawancara' => '2023-10-10',
                'tanggal_pengumuman' => '2023-10-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Kesehatan',
                'judul_kategoribeasiswa' => 'Beasiswa Penelitian Kanker',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang tertarik melakukan penelitian di bidang kanker.',
                'syarat_beasiswa' => "Sedang menempuh pendidikan Strata 1/Diploma 4 di semester IV, dari semua disiplin ilmu.\nIPK minimum 3.00 pada semester III, serta dapat mempertahankan IPK minimum 3.00 hingga akhir semester IV.\nAktif mengikuti kegiatan organisasi baik di dalam maupun luar kampus.",
                'tanggal_pendaftaranawal' => '2023-10-01',
                'tanggal_pendaftaranakhir' => '2023-10-31',
                'tanggal_wawancara' => '2023-11-10',
                'tanggal_pengumuman' => '2023-11-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Bisnis',
                'judul_kategoribeasiswa' => 'Beasiswa Kewirausahaan',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang memiliki usaha kecil atau startup yang ingin dikembangkan.',
                'syarat_beasiswa' => "Sedang menempuh pendidikan Strata 1/Diploma 4 di semester IV, dari semua disiplin ilmu.\nIPK minimum 3.00 pada semester III, serta dapat mempertahankan IPK minimum 3.00 hingga akhir semester IV.\nAktif mengikuti kegiatan organisasi baik di dalam maupun luar kampus.",
                'tanggal_pendaftaranawal' => '2023-11-01',
                'tanggal_pendaftaranakhir' => '2023-11-30',
                'tanggal_wawancara' => '2023-12-10',
                'tanggal_pengumuman' => '2023-12-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Olahraga',
                'judul_kategoribeasiswa' => 'Beasiswa Bulutangkis',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang memiliki prestasi dalam olahraga bulutangkis.',
                'syarat_beasiswa' => "Sedang menempuh pendidikan Strata 1/Diploma 4 di semester IV, dari semua disiplin ilmu.\nIPK minimum 3.00 pada semester III, serta dapat mempertahankan IPK minimum 3.00 hingga akhir semester IV.\nAktif mengikuti kegiatan organisasi baik di dalam maupun luar kampus.",
                'tanggal_pendaftaranawal' => '2023-12-01',
                'tanggal_pendaftaranakhir' => '2023-12-31',
                'tanggal_wawancara' => '2024-01-10',
                'tanggal_pengumuman' => '2024-01-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Lingkungan',
                'judul_kategoribeasiswa' => 'Beasiswa Pelestarian Alam',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang berdedikasi dalam pelestarian alam dan lingkungan hidup.',
                'syarat_beasiswa' => "Sedang menempuh pendidikan Strata 1/Diploma 4 di semester IV, dari semua disiplin ilmu.\nIPK minimum 3.00 pada semester III, serta dapat mempertahankan IPK minimum 3.00 hingga akhir semester IV.\nAktif mengikuti kegiatan organisasi baik di dalam maupun luar kampus.",
                'tanggal_pendaftaranawal' => '2024-01-01',
                'tanggal_pendaftaranakhir' => '2024-01-31',
                'tanggal_wawancara' => '2024-02-10',
                'tanggal_pengumuman' => '2024-02-20',
            ]
            // Tambahkan data beasiswa lain sesuai kebutuhan
        ];

        Kategoribeasiswa::insert($kategorisBeasiswa);

        $kategorisGalangDana = [
            [
                'jenis_kategori' => 'karya kreatif dan modal usaha',
                'nama_kategori' => 'film dan video',
            ], [
                'jenis_kategori' => 'karya kreatif dan modal usaha',
                'nama_kategori' => 'musik',
            ],
            [
                'jenis_kategori' => 'karya kreatif dan modal usaha',
                'nama_kategori' => 'seni',
            ],
            [
                'jenis_kategori' => 'karya kreatif dan modal usaha',
                'nama_kategori' => 'sastra',
            ],
            [
                'jenis_kategori' => 'karya kreatif dan modal usaha',
                'nama_kategori' => 'teater',
            ],
            [
                'jenis_kategori' => 'karya kreatif dan modal usaha',
                'nama_kategori' => 'pertanian',
            ],
            [
                'jenis_kategori' => 'karya kreatif dan modal usaha',
                'nama_kategori' => 'umkm',
            ],
            [
                'jenis_kategori' => 'karya kreatif dan modal usaha',
                'nama_kategori' => 'teknologi',
            ],
            [
                'jenis_kategori' => 'kegiatan sosial',
                'nama_kategori' => 'bantuan kemanusiaan',
            ],
            [
                'jenis_kategori' => 'kegiatan sosial',
                'nama_kategori' => 'pendidikan',
            ],
            [
                'jenis_kategori' => 'kegiatan sosial',
                'nama_kategori' => 'kesehatan',
            ],
            [
                'jenis_kategori' => 'kegiatan sosial',
                'nama_kategori' => 'perlindungan lingkungan',
            ],
            [
                'jenis_kategori' => 'kegiatan sosial',
                'nama_kategori' => 'kesejahteraan hewan',
            ],
            [
                'jenis_kategori' => 'kegiatan sosial',
                'nama_kategori' => 'hak asasi manusia',
            ],
            [
                'jenis_kategori' => 'kegiatan sosial',
                'nama_kategori' => 'pembangunan',
            ],
            [
                'jenis_kategori' => 'difabel',
                'nama_kategori' => 'bantuan teknis',
            ],
            [
                'jenis_kategori' => 'difabel',
                'nama_kategori' => 'pendidikan',
            ],
            [
                'jenis_kategori' => 'difabel',
                'nama_kategori' => 'pengobatan atau rehabilitas',
            ],
            [
                'jenis_kategori' => 'difabel',
                'nama_kategori' => 'pekerjaan',
            ],
            [
                'jenis_kategori' => 'difabel',
                'nama_kategori' => 'olahraga dan rekreasi',
            ],
            [
                'jenis_kategori' => 'difabel',
                'nama_kategori' => 'aksesibilitas',
            ],
            [
                'jenis_kategori' => 'difabel',
                'nama_kategori' => 'perawatan jangka panjang',
            ],
            [
                'jenis_kategori' => 'panti asuhan',
                'nama_kategori' => 'pendidikan',
            ],
            [
                'jenis_kategori' => 'panti asuhan',
                'nama_kategori' => 'kesehatan dan pengobatan',
            ],
            [
                'jenis_kategori' => 'panti asuhan',
                'nama_kategori' => 'rekreasi dan kegiatan sosial',
            ],
            [
                'jenis_kategori' => 'panti asuhan',
                'nama_kategori' => 'pemberdayaan dan persiapan mandiri',
            ],
            [
                'jenis_kategori' => 'panti asuhan',
                'nama_kategori' => 'renovasi dan perbaikan fasilitas',
            ],
            [
                'jenis_kategori' => 'panti asuhan',
                'nama_kategori' => 'program khusus',
            ],
            [
                'jenis_kategori' => 'rumah ibadah',
                'nama_kategori' => 'pembangunan',
            ],
            [
                'jenis_kategori' => 'rumah ibadah',
                'nama_kategori' => 'sosial dan kemanusiaan',
            ],
            [
                'jenis_kategori' => 'rumah ibadah',
                'nama_kategori' => 'pendidikan dan pelatihan',
            ],
            [
                'jenis_kategori' => 'rumah ibadah',
                'nama_kategori' => 'keagamaan',
            ],
            [
                'jenis_kategori' => 'rumah ibadah',
                'nama_kategori' => 'fasilitas',
            ],
            [
                'jenis_kategori' => 'rumah ibadah',
                'nama_kategori' => 'pemeliharaan',
            ],
            [
                'jenis_kategori' => 'rumah ibadah',
                'nama_kategori' => 'renovasi arsitektur warisan budaya',
            ],
            [
                'jenis_kategori' => 'bantuan orang sakit',
                'nama_kategori' => 'perawatan medis',
            ],
            [
                'jenis_kategori' => 'bantuan orang sakit',
                'nama_kategori' => 'obat obatan',
            ],
            [
                'jenis_kategori' => 'bantuan orang sakit',
                'nama_kategori' => 'pengobatan khusus',
            ],
            [
                'jenis_kategori' => 'bantuan orang sakit',
                'nama_kategori' => 'perawatan jangka panjang',
            ],
            [
                'jenis_kategori' => 'bantuan orang sakit',
                'nama_kategori' => 'psikologis',
            ],
            [
                'jenis_kategori' => 'bantuan orang sakit',
                'nama_kategori' => 'santunan',
            ],
            [
                'jenis_kategori' => 'bantuan orang sakit',
                'nama_kategori' => 'penelitian dan pengembangan medis',
            ],
            [
                'jenis_kategori' => 'bencana alam',
                'nama_kategori' => 'bantuan darurat',
            ],
            [
                'jenis_kategori' => 'bencana alam',
                'nama_kategori' => 'pemulihan',
            ],
            [
                'jenis_kategori' => 'bencana alam',
                'nama_kategori' => 'kesehatan',
            ],
            [
                'jenis_kategori' => 'bencana alam',
                'nama_kategori' => 'evakuasi',
            ],
            [
                'jenis_kategori' => 'bencana alam',
                'nama_kategori' => 'transportasi',
            ],
            [
                'jenis_kategori' => 'bencana alam',
                'nama_kategori' => 'logistik',
            ],
            // Tambahkan data kategori galang dana lain sesuai kebutuhan
        ];

        Kategorigalangdana::insert($kategorisGalangDana);

        $pendaftaranBeasiswaData = [
            [
                'id_peserta' =>  $user->id,
                'id_kategoribeasiswa' => 1,
                'nama_depan' => 'John',
                'nama_belakang' => 'Doe',
                'email' => 'john@example.com',
                'nomor_hp' => '1234567890',
                'kelurahan' => 'Sample Kelurahan',
                'kecamatan' => 'Sample Kecamatan',
                'kabupaten' => 'Sample Kabupaten',
                'RT' => '001',
                'RW' => '002',
                'provinsi' => 'Sample Provinsi',
                'nomor_identitas' => '123456789',
                'ratarata_nilai' => '90',
                'semester' => 'Semester 3',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_peserta' => $user->id,
                'id_kategoribeasiswa' => 2,
                'nama_depan' => 'Jane',
                'nama_belakang' => 'Smith',
                'email' => 'qiqikan87@gmail.com',
                'nomor_hp' => '9876543210',
                'kelurahan' => 'Sample Kelurahan 2',
                'kecamatan' => 'Sample Kecamatan 2',
                'kabupaten' => 'Sample Kabupaten 2',
                'RT' => '003',
                'RW' => '004',
                'provinsi' => 'Sample Provinsi 2',
                'nomor_identitas' => '987654321',
                'ratarata_nilai' => '85',
                'semester' => 'Semester 5',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('pendaftaran_beasiswas')->insert($pendaftaranBeasiswaData);
        for ($i = 1; $i <= 10; $i++) {
            DB::table('programgalangdana')->insert([
                'id_user' => $user->id, // Ganti dengan ID user yang sesuai
                'id_kategoricampaign' => $i, // Ganti dengan ID kategori campaign yang sesuai
                'judul_campaign' => 'Judul Campaign ' . $i,
                'lokasi_campaign' => 'Lokasi Campaign ' . $i,
                'tujuan_campaign' => 'Tujuan Campaign ' . $i,
                'targetdonasi_campaign' => 10000 + ($i * 1000), // Ganti dengan target donasi yang sesuai
                'rinciandana_campaign' => 'Rincian Dana Campaign ' . $i,
                'deskripsi_campaign' => 'Deskripsi Campaign ' . $i,
                'foto_campaign' => 'nama-file-gambar-' . $i . '.jpg', // Ganti dengan nama file gambar yang sesuai
                'tanggal_mulai' => now()->subDays($i)->format('Y-m-d'), // Tanggal mulai berbeda untuk setiap seeder
                'tanggal_akhir' => now()->addDays($i)->format('Y-m-d'), // Tanggal akhir berbeda untuk setiap seeder
                'praturan_campaign' => 'Praturan Campaign ' . $i,
                'is_active' => $i % 2, // Menjadikan setengah dari seeder aktif (1) dan setengahnya non-aktif (0)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $payments = [
            [
                'user_id' => $user->id, // Gantilah dengan ID user yang sesuai
                'id_galangdana' => '1', // Gantilah dengan ID galangdana yang sesuai
                'total' => 100000, // Total pembayaran
                'buktitransaksi' => 'bukti1.jpg', // Nama berkas bukti transaksi
                'invoice_code' => 'INV001', // Kode faktur unik
                'status' => 2, // Status pembayaran (2 = Pembayaran Disetujui)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $user->id, // Gantilah dengan ID user yang sesuai
                'id_galangdana' => '2', // Gantilah dengan ID galangdana yang sesuai
                'total' => 150000, // Total pembayaran
                'buktitransaksi' => 'bukti2.jpg', // Nama berkas bukti transaksi
                'invoice_code' => 'INV002', // Kode faktur unik
                'status' => 1, // Status pembayaran (1 = Bukti Telah Dikirim dan Perlu Direview)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan Anda
        ];

        // Loop melalui data dan masukkan ke dalam tabel payments
        foreach ($payments as $payment) {
            payment::create($payment);
        }
    }
}
