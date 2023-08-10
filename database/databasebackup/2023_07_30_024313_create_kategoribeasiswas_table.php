<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategoribeasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kategoribeasiswa');
            $table->string('judul_kategoribeasiswa');
            $table->string('banner_beasiswa')->nullable();
            $table->text('deskripsi_beasiswa'); // Use TEXT data type
            $table->text('syarat_beasiswa'); // Use TEXT data type
            $table->date('tanggal_pendaftaranawal');
            $table->date('tanggal_pendaftaranakhir');
            $table->date('tanggal_wawancara');
            $table->date('tanggal_pengumuman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoribeasiswas');
    }
};
