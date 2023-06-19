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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('Kode_barang');
            $table->string('nama_barang')->nullable();
            $table->string('Deskripsi')->unique();
            $table->integer('Harga');
            $table->unsignedBigInteger('Satuan_id')->constrained();
            $table->timestamps();
            $table->foreign('Satuan_id')->references('id')->on('satuans');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
