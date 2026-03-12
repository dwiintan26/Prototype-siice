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

        Schema::create('perizinan', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('user_id');
            $table->unsignedBigInteger('user_id');
 
    $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('izin_id');
            $table->foreign('izin_id')->references('id')->on('izin');
            $table->dateTime('tanggal_permohonan');
            $table->date('tanggal_sk');
            $table->string('nomor_sk', 255);
            $table->string('provinsi')->default('100');
            $table->string('kabupaten')->default('100');
            $table->string('kecamatan')->default('100');
            $table->string('desa')->default('100');
            $table->text('alamat_lengkap');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('nama_perusahaan');
            $table->string('npwp_perusahaan');
            $table->integer('jumlah_nilai_investasi');
            $table->text('nama_pemilik');
            $table->text('tanda_bukti_kepemilikan_tanah');
            $table->integer('nomer_bukti_tanda_kepemilikan_tanah');
            $table->date('tanggal_tanda_bbigintukti_kepemilikan_tanah');
            $table->decimal('luas_tanah');
            $table->string('untuk_mendirikan_bangunan');
            $table->integer('jumlah_unit_bangunan');
            $table->string('jenis_bangunan_gedung');
            $table->decimal('luas_bangunan_gedung');
            $table->text('prasarana_bangunan_gedung');
            $table->decimal('luas_prasarana_bangunan_gedung');
            $table->string('pondasi');
            $table->string('dinding');
            $table->string('rangka_atap');
            $table->string('atap');
            $table->string('lantai');
            $table->text('klasifikasi');
            $table->bigInteger('status_izin');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perizinan');
    }
};
