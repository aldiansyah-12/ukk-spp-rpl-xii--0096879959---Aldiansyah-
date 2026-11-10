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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id_kelas() -> INT();
            $table->nama_kelas() -> Varchar(20);
            $table->kopetensi_keahlian() -> Varchar(20);
            $table->nama_kelas() -> Varchar(20);
            $table->nama_kelas() -> Varchar(20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
