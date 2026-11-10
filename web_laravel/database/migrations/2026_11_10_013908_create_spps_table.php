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
        Schema::create('spps', function (Blueprint $table) {
            $table->id_spp()-> INT();
            $table->tahun()-> INT() -> notnull;
            $table->nominal()-> varchar(10);
            $table->nama_petugas()-> varchar(50);
            $table->level();
            $table->created_at();
            $table->updated_at();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spps');
    }
};
