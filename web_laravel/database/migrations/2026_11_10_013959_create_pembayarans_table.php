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
            $table->id('id_petugas')->NOTNULL();
            $table->char('nisn',10)->NOTNULL();
            $table->date('tgl_bayar')->NOTNULL();
            $table->string('bulan_bayar',20)->NOTNULL();
            $table->string('tahun_bayar',4)->NOTNULL();
            $table->id('id_spp') ->INT();
            $table->char('jumlsh_pembayaran',20)->NOTNULL();
            $table->timestamp('id_petugas');
            $table->timestamp('id_petugas');
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
