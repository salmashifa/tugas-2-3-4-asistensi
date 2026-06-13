<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelompoks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelompok');
            $table->string('mata_kuliah');
            $table->string('dosen_pembimbing')->nullable();
            $table->text('deskripsi')->nullable();
            $table->enum('status', ['aktif', 'selesai', 'pending'])->default('aktif');
            $table->timestamps();
        });

        Schema::create('anggota_kelompoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelompok_id')->constrained('kelompoks')->onDelete('cascade');
            $table->string('nama');
            $table->string('nim')->unique();
            $table->string('email')->nullable();
            $table->string('github')->nullable();
            $table->string('foto')->nullable();
            $table->string('peran')->default('Anggota'); // Ketua / Anggota
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anggota_kelompoks');
        Schema::dropIfExists('kelompoks');
    }
}; 