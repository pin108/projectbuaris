<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendaftaranBeasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_peserta' => 1,
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
                'id_peserta' => 2,
                'id_kategoribeasiswa' => 2,
                'nama_depan' => 'Jane',
                'nama_belakang' => 'Smith',
                'email' => 'jane@example.com',
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
            // Tambahkan 8 contoh entri lagi
        ];

        DB::table('pendaftaran_beasiswas')->insert($data);
        }
}
