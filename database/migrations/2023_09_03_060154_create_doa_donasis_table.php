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
        Schema::create('doa_donasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_galangdana');
            $table->string('nama')->nullable();
            $table->text('deskripsi_doa')->nullable();
            $table->timestamps();

            //relasi
            $table->foreign('id_galangdana')->references('id')->on('programgalangdana');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doa_donasis');
    }
};
