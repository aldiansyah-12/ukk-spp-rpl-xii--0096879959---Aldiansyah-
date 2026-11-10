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
            $table->id('id_spp')->int();
            $table->id('tahun')->int()->NOTNULL();
            $table->string('nominal',10)->int()->NOTNULL();
            $table->string('keterangan',30)->NOTNULL();
            $table->timestamp('created_at')->NOTNULL();
            $table->timestamp('updated_at')->NOTNULL();
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
