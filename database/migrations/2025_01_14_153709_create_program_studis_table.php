<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramStudisTable extends Migration
{
    public function up()
    {
        Schema::create('program_studis', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('program_studi');
            $table->enum('status', ['Aktif', 'Non-Aktif']);
            $table->enum('jenjang', ['S1', 'S2']);
            $table->enum('verifikasi_status', ['Terverifikasi', 'Belum Terverifikasi']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('program_studis');
    }
}
