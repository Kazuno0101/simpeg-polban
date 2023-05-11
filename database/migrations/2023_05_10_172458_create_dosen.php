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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();            
            $table->string('nama');
            $table->string('nip', 18)->unique()->nullable();
            $table->string('nidn', 10)->unique();
            $table->unsignedBigInteger('unit_kerja_id');
            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerja');
            $table->unsignedBigInteger('jabatan_struktural_id')->nullable();
            $table->foreign('jabatan_struktural_id')->references('id')->on('jabatan');
            $table->unsignedBigInteger('jabatan_fungsional_id');
            $table->foreign('jabatan_fungsional_id')->references('id')->on('jabatan');
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
        Schema::dropIfExists('dosen');
    }
};
