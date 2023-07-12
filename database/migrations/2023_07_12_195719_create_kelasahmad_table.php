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
        Schema::create('kelasahmad', function (Blueprint $table) {
            $table->id();
            $table->string('kelas_ahmad', '50');
            $table->string('nama_ahmad', '50');
            $table->string('keterangan', '50');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelasahmad');
    }
};
