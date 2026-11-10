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
        Schema::create('siswas', function (Blueprint $table) {
            $table->char('nisn',10)->NOTNULL();
            $table->char('nis',20)->NOTNULL();
            $table->string('nama',50)->NOTNULL();
            $table->id('id_kelas')->INT()->NOTNULL();
            $table->text('alamat');
            $table->string('no_telp',12);
            $table->id('id_spp')->INT()->NOTNULL();
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
