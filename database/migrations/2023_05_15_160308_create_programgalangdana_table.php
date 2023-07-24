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
        Schema::create('programgalangdana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user'); //relasi dengan tabel user
            $table->string('kategori_galangdana');
            $table->string('persetujuan_galangdana');
            $table->string('nama');
            $table->string('nomor_hp');
            $table->string('pekerjaan');
            $table->string('tempat_kerja');
            $table->string('nama_kegiatan');
            $table->string('tujuan_kegiatan');
            $table->string('lokasi');
            $table->string('gambar');
            $table->integer('targetdonasi');
            $table->integer('batas_waktu');
            $table->date('tanggal_mulai');
            $table->string('rincian_galangdana');
            $table->string('judul');
            $table->string('deskripsi');
            $table->boolean('is_active')->nullable();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programgalangdana');
    }
};
