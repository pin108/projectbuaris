<?php

namespace Database\Seeders;

use App\Models\Kategoribeasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kategoribeasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
