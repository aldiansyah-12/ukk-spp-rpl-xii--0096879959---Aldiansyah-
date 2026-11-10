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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('id_pembayaran')->int();
            $table->id('id_petugas');
            $table->char('nisn',10);
            $table->date('tgl_bayar');
            $table->string('bulan_bayar',20);
            $table->string('tahun_bayar',4);
            $table->id('id_spp') ->INT();
            $table->id('id_petugas');
            $table->id('id_petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
