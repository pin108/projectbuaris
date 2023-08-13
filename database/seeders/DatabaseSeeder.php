<?php

namespace Database\Seeders;

use App\Models\Kategoribeasiswa;
use App\Models\Kategorigalangdana;
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
            'email' => 'janedoe@example.com',
            'password' => Hash::make('password'),
            'roles' => 0,
        ]);

        DB::table('programgalangdana')->insert([
            'id_user' => 2308000001,
            'id_kategoricampaign' => 1,
            'judul_campaign' => 'Judul Campaign Pertama',
            'lokasi_campaign' => 'Lokasi Campaign Pertama',
            'tujuan_campaign' => 'Tujuan Campaign Pertama',
            'targetdonasi_campaign' => 10000,
            'rinciandana_campaign' => 'Rincian Dana Campaign Pertama',
            'deskripsi_campaign' => 'Deskripsi Campaign Pertama',
            'foto_campaign' => 'foto_campaign_pertama.jpg',
            'tanggal_mulai' => '2023-08-10',
            'tanggal_akhir' => '2023-08-30',
            'praturan_campaign' => 'Praturan Campaign Pertama',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('programgalangdana')->insert([
            'id_user' => 2308000001,
            'id_kategoricampaign' => 2,
            'judul_campaign' => 'Judul Campaign Kedua',
            'lokasi_campaign' => 'Lokasi Campaign Kedua',
            'tujuan_campaign' => 'Tujuan Campaign Kedua',
            'targetdonasi_campaign' => 5000,
            'rinciandana_campaign' => 'Rincian Dana Campaign Kedua',
            'deskripsi_campaign' => 'Deskripsi Campaign Kedua',
            'foto_campaign' => 'foto_campaign_kedua.jpg',
            'tanggal_mulai' => '2023-09-05',
            'tanggal_akhir' => '2023-09-25',
            'praturan_campaign' => 'Praturan Campaign Kedua',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $kategoris = [
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Sains dan Teknologi',
                'judul_kategoribeasiswa' => 'Beasiswa Riset Komputer',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang mengkhususkan diri di bidang riset komputer.',
                'tanggal_pendaftaranawal' => '2023-08-01',
                'tanggal_pendaftaranakhir' => '2023-08-31',
                'tanggal_wawancara' => '2023-09-10',
                'tanggal_pengumuman' => '2023-09-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Seni dan Budaya',
                'judul_kategoribeasiswa' => 'Beasiswa Tari Tradisional',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang memiliki bakat di bidang tari tradisional daerah.',
                'tanggal_pendaftaranawal' => '2023-09-01',
                'tanggal_pendaftaranakhir' => '2023-09-30',
                'tanggal_wawancara' => '2023-10-10',
                'tanggal_pengumuman' => '2023-10-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Kesehatan',
                'judul_kategoribeasiswa' => 'Beasiswa Penelitian Kanker',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang tertarik melakukan penelitian di bidang kanker.',
                'tanggal_pendaftaranawal' => '2023-10-01',
                'tanggal_pendaftaranakhir' => '2023-10-31',
                'tanggal_wawancara' => '2023-11-10',
                'tanggal_pengumuman' => '2023-11-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Bisnis',
                'judul_kategoribeasiswa' => 'Beasiswa Kewirausahaan',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang memiliki usaha kecil atau startup yang ingin dikembangkan.',
                'tanggal_pendaftaranawal' => '2023-11-01',
                'tanggal_pendaftaranakhir' => '2023-11-30',
                'tanggal_wawancara' => '2023-12-10',
                'tanggal_pengumuman' => '2023-12-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Olahraga',
                'judul_kategoribeasiswa' => 'Beasiswa Bulutangkis',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang memiliki prestasi dalam olahraga bulutangkis.',
                'tanggal_pendaftaranawal' => '2023-12-01',
                'tanggal_pendaftaranakhir' => '2023-12-31',
                'tanggal_wawancara' => '2024-01-10',
                'tanggal_pengumuman' => '2024-01-20',
            ],
            [
                'jenis_kategoribeasiswa' => 'Beasiswa Lingkungan',
                'judul_kategoribeasiswa' => 'Beasiswa Pelestarian Alam',
                'deskripsi_beasiswa' => 'Beasiswa untuk mahasiswa yang berdedikasi dalam pelestarian alam dan lingkungan hidup.',
                'tanggal_pendaftaranawal' => '2024-01-01',
                'tanggal_pendaftaranakhir' => '2024-01-31',
                'tanggal_wawancara' => '2024-02-10',
                'tanggal_pengumuman' => '2024-02-20',
            ]
        ];
        Kategoribeasiswa::insert($kategoris);
        $kategoris = [
            [
                'jenis_kategori' => 'karya kreatif dan modal usaha',
                'nama_kategori' => 'film dan video',
            ],
            [
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
            // Tambahkan data lain sesuai kebutuhan
        ];
        // Memasukkan data ke dalam tabel products
        Kategorigalangdana::insert($kategoris);
    
    }
    

    
}