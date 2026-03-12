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

        Schema::create('syarat_izin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perizinan_id');
            $table->foreign('perizinan_id')->references('id')->on('perizinan');
            $table->unsignedBigInteger('persyaratan_id');
            $table->foreign('persyaratan_id')->references('id')->on('persyaratan');
            $table->string('file_upload', 255);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syarat_izin');
    }
};
