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
        Schema::create('programdonasis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->float('price');
            $table->string('description');
            $table->string('image')->nullable();
            // $table->string('image');
            $table->integer('kategory');
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programdonasis');
    }
};
