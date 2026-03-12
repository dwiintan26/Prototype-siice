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
        Schema::disableForeignKeyConstraints();

        Schema::create('izin', function (Blueprint $table) {
            $table->id();
            $table->string('nama_izin', 255);
            $table->unsignedBigInteger('bidang');

            $table->foreign('bidang')->references('id')->on('Bidang');
            $table->string('masa_berlaku', 255);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin');
    }
};
