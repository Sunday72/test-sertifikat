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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->integer('ketepatan_waktu');
            $table->integer('tanggung_jawab');
            $table->integer('kehadiran');
            $table->integer('keterampilan_kerja');
            $table->integer('kualitas_hasil_kerja');
            $table->integer('komunikasi');
            $table->integer('kerja_sama');
            $table->integer('percaya_diri');
            $table->integer('penampilan');
            $table->enum('predikat', ['Sangat Baik', 'Baik', 'Buruk', 'Sangat Buruk']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
