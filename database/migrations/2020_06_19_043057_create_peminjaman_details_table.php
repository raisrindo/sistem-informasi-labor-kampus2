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
            $table->integer('peminjaman_id');
            $table->date('tanggal_pakai');
            $table->date('tanggal_selesaipakai');
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
