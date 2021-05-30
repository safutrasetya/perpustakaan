<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTabelBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_publisher');
            $table->string('cover');
            $table->string('judul');
            $table->string('penerbit');
            $table->string('pengarang');
            $table->unsignedInteger('Tahun_Terbit');
            $table->text('sinopsis');
            $table->string('toko');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_bukus');
    }
}
