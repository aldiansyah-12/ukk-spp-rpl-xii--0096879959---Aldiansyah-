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
        Schema::create('petugas', function (Blueprint $table) {
            $table->id('id_petugas')->NOTNULL();
            $table->string('username',30)->NOTNULL();
            $table->string('password',30)->NOTNULL();
            $table->string('nama_petugas',30)->NOTNULL();
            $table->char('level',30)->NOTNULL();
            $table->timestamp('created_at')->NOTNULL();
            $table->timestamp('updated_at')->NOTNULL();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
