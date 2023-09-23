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
        Schema::create('pencairangalangdanas', function (Blueprint $table) {
            $table->id();
            $table->string('id_galangdana');
            $table->string('user_id');
            $table->string('nama_penggalangdana');
            $table->string('judul_galangdana');
            $table->integer('jumlah');
            $table->text('foto_pencairan');
            $table->text('foto_penyerahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencairangalangdanas');
    }
};
