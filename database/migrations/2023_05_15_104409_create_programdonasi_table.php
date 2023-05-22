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
        Schema::create('programdonasi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_validatormaster');
            $table->string('program_nama');
            $table->string('deskripsi');
            $table->integer('target_donasi');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('rekening_tujuan');
            $table->string('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programdonasi');
    }
};
