<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
//            $table->string('name');
//            $table->string('email')->unique();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
//            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();

            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nik', 17);
            $table->string('kota');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->string('alamat');
            $table->string('telp', 32);
            $table->enum('jabatan', ['admin', 'anggota']);

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
        Schema::dropIfExists('users');
    }
}
