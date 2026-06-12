<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_penulis');
            $table->unsignedInteger('id_kategori');
            $table->string('judul');
            $table->text('isi');
            $table->string('gambar');
            $table->string('hari_tanggal', 50);

            $table->foreign('id_penulis')->references('id')->on('penulis')->restrictOnDelete();
            $table->foreign('id_kategori')->references('id')->on('kategori_artikel')->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
