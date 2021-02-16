<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('program_kerja');
            $table->string('tujuan');
            $table->date('waktu_mulai');
            $table->date('waktu_selesai')->nullable();
            $table->string('tempat');
            $table->string('sasaran');
            $table->string('pelaksana');
            $table->boolean('status')->default(false);
            $table->text('hasil')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('program_kerjas');
    }
}
