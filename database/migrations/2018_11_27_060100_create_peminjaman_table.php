<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_pinjam');
            $table->unsignedInteger('id_agt');
            $table->foreign('id_agt')->references('id')->on('anggotas')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedInteger('id_buku');
            $table->foreign('id_buku')->references('id')->on('buku')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->date('tgl_pjm')->nullable();
            $table->date('tgl_hsblk')->nullable();
            $table->date('tgl_kbl')->nullable();
            $table->double('denda')->nullable();
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
        Schema::dropIfExists('peminjaman');
    }
}