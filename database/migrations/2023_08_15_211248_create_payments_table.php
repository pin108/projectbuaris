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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id'); // Menghubungkan ke tabel users
            $table->string('id_galangdana'); // Menghubungkan ke tabel fundraisings
            $table->integer('total');
            // $table->string('payer_name');
            $table->text('buktitransaksi')->nullable(); // Nama berkas bukti transaksi
            $table->string('invoice_code')->unique();
            $table->tinyInteger('status')->nullable(); // Kolom status dengan nilai default 0

            $table->timestamps();

            // Definisi relasi

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
