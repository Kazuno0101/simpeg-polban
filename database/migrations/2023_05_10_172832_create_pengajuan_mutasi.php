<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_mutasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dosen_id');
            $table->foreign('dosen_id')->references('id')->on('dosen');
            $table->unsignedBigInteger('unit_kerja_asal_id');
            $table->foreign('unit_kerja_asal_id')->references('id')->on('unit_kerja');
            $table->unsignedBigInteger('unit_kerja_tujuan_id');
            $table->foreign('unit_kerja_tujuan_id')->references('id')->on('unit_kerja');
            $table->dateTime('tanggal_pengajuan');
            $table->enum('status', ['ditolak', 'disetujui', 'diverifikasi','pending'])->nullable();
            $table->dateTime('tanggal_validasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_mutasi');
    }
};
