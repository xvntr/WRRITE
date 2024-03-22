<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Untuk judul artikel
            $table->string('image')->nullable(); // Untuk URL gambar atau path file. Nullable, artinya boleh tidak diisi.
            $table->string('author'); // Untuk nama penulis
            $table->text('content'); // Untuk konten artikel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
