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
        Schema::create('pengajuan_wfhs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_karyawan')->references('id')->on('karyawans');
            $table->string('koordinat_gps');
            $table->string('foto_selfie');
            $table->text('activity_log');
            $table->boolean('status_kehadiran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_wfhs');
    }
};
