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
            $table->unsignedBigInteger('id_kategoricampaign');
            $table->string('judul_campaign');
            $table->string('lokasi_campaign');
            $table->string('tujuan_campaign');
            $table->integer('targetdonasi_campaign');
            $table->string('rinciandana_campaign');
            $table->string('deskripsi_campaign');
            $table->string('foto_campaign');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->string('praturan_campaign');
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
