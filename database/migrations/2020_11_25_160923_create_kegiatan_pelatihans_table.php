<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_pelatihans', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan_pelatihan');
            $table->string('tempat');
            $table->dateTime('waktu');
            $table->string('pemateri');
            $table->string('peserta');
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
        Schema::dropIfExists('kegiatan_pelatihans');
    }
}
