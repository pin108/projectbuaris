<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
        Kategori::insert($kategoris);
    }
}
