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

        // DB::table('programgalangdana')->insert([
        //     'id_user' => 2308000001,
        //     'id_kategoricampaign' => 1,
        //     'judul_campaign' => 'Judul Campaign Pertama',
        //     'lokasi_campaign' => 'Lokasi Campaign Pertama',
        //     'tujuan_campaign' => 'Tujuan Campaign Pertama',
        //     'targetdonasi_campaign' => 10000,
        //     'rinciandana_campaign' => 'Rincian Dana Campaign Pertama',
        //     'deskripsi_campaign' => 'Deskripsi Campaign Pertama',
        //     'foto_campaign' => 'foto_campaign_pertama.jpg',
        //     'tanggal_mulai' => '2023-08-10',
        //     'tanggal_akhir' => '2023-08-30',
        //     'praturan_campaign' => 'Praturan Campaign Pertama',
        //     'is_active' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

    }
    

    
}