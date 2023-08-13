<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class galangdanaseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('programgalangdana')->insert([
                'id_user' => 2308000002, // Ganti dengan ID user yang sesuai
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
                'is_active' => 1, // Menjadikan setengah dari seeder aktif (1) dan setengahnya non-aktif (0)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
