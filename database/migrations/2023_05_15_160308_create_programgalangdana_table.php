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
            $table->integer('id_user');
            $table->string('nama_galangdana');
            $table->string('alamat');
            $table->string('deskripsi');
            $table->string('target_donasi');
            $table->string('rekening_tujuan');
            $table->string('gambar');
            $table->string('kategori');
            $table->timestamps();
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
