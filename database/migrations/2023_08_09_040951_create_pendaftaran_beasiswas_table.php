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
        Schema::create('pendaftaran_beasiswas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_peserta');
            $table->unsignedBigInteger('id_kategoribeasiswa');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email');
            $table->string('nomor_hp');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('RT');
            $table->string('RW');
            $table->string('provinsi');
            $table->string('nomor_identitas');
            $table->string('ratarata_nilai');
            $table->string('semester');
            $table->string('kartu_identitas')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('ktp_peserta')->nullable();
            $table->string('ktp_orangtuapeserta')->nullable();
            $table->string('foto_peserta')->nullable();
            $table->string('sertifikat_peserta')->nullable();
            $table->timestamps();
            $table->foreign('id_peserta')->references('id')->on('users');
            $table->foreign('id_kategoribeasiswa')->references('id')->on('kategoribeasiswas');
            $table->integer('is_active')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_beasiswas');
    }
};
