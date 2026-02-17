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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_product');
            $table->string('nama', 100);
            $table->decimal('harga', 15, 2);
            $table->text('deskripsi')->nullable();
            $table->string('gambar');

            // Foreign Key
            $table->unsignedBigInteger('id_brand');
            $table->unsignedBigInteger('id_kategori');

            $table->foreign('id_kategori')
                ->references('id_kategori')
                ->on('kategori')
                ->onDelete('cascade');

            $table->foreign('id_brand')
                ->references('id_brand')
                ->on('brand')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
