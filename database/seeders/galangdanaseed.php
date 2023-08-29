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
                'id_user' => 2308000002,
                'id_kategoricampaign' => $i,
                'judul_campaign' => 'Judul Campaign ' . $i,
                'lokasi_campaign' => 'Lokasi Campaign ' . $i,
                'tujuan_campaign' => 'Tujuan Campaign ' . $i,
                'targetdonasi_campaign' => 10000 + ($i * 1000),
                'rinciandana_campaign' => 'Rincian Dana Campaign ' . $i,
                'deskripsi_campaign' => 'Deskripsi Campaign ' . $i,
                'foto_campaign' => 'nama-file-gambar-' . $i . '.jpg',
                'tanggal_mulai' => now()->subDays($i)->format('Y-m-d'),
                'tanggal_akhir' => now()->addDays($i)->format('Y-m-d'),
                'praturan_campaign' => 'Praturan Campaign ' . $i,
                'nama_bank' => 'bank' . $i, // Removed the extra comma here
                'nomor_rekening' => $i,
                'pemilik_rekening' => 'pemilik' . $i,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
