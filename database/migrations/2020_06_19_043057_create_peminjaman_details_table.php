<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ruangan_id');
            $table->string('ruangan_nama');
            $table->integer('peminjaman_id');
            $table->string('peminjam_nama');
            $table->date('tanggal_dipinjam');
            $table->time('waktu_pakai');
            $table->time('waktu_selesai');
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
        Schema::dropIfExists('peminjaman_details');
    }
}
