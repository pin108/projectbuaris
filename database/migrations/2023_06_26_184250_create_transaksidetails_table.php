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
        Schema::create('transaksidetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksis_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreignId('product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            
            // $table->json('product');
            $table->bigInteger('qty');
            $table->decimal('price', 48, 4); // harga satuan ketika dibeli
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksidetails');
    }
};
