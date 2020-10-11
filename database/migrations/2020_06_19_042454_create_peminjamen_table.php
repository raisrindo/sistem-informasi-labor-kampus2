<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('user_nama');
            $table->string('user_nomorinduk');
            $table->string('user_nomorhp');
            $table->unsignedBigInteger('ruangan_id');
            $table->string('ruangan_nama');
            $table->date('tanggal');
            $table->date('tanggal_dipinjam');
            $table->time('waktu_pakai');
            $table->time('waktu_selesai');
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ruangan_id')->references('id')->on('ruangans')->onDelete('cascade')->onUpdate('cascade');



            $table->foreign('user_nama')->references('name')->on('users')->onUpdate('cascade');
            // $table->foreign('user_nomorinduk')->references('nomorinduk')->on('users')->onUpdate('cascade');
            // $table->foreign('user_nomorhp')->references('nomorhp')->on('users')->onUpdate('cascade');
            $table->foreign('ruangan_nama')->references('nama_ruangan')->on('ruangans')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamen');
    }
}
