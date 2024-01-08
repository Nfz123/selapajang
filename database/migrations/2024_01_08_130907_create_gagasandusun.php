<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGagasandusun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gagasandusun', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rt')->nullable();
            $table->bigInteger('rw')->nullable();
            $table->string('gagasan')->nullable();
            $table->integer('lokasi_kegiatan')->nullable();
            $table->integer('perkiraanvolume')->nullable();
            $table->integer('satuan')->nullable();
            $table->date('planing2022')->nullable();
            $table->date('planing2023')->nullable();
            $table->date('planing2024')->nullable();
            $table->date('planing2025')->nullable();
            $table->date('planing2026')->nullable();
            $table->date('planing2027')->nullable();
            $table->date('realisasi2022')->nullable();
            $table->date('realisasi2023')->nullable();
            $table->date('realisasi2024')->nullable();
            $table->date('realisasi2025')->nullable();
            $table->date('realisasi2026')->nullable();
            $table->date('realisasi2027')->nullable();
            $table->integer('diajukan')->nullable();
            $table->integer('status')->nullable();
            $table->date('pengerjaanstart')->nullable();
            $table->date('pengerjaanfinish')->nullable();
            $table->integer('jumlahhari')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('gagasandusun');
    }
}
