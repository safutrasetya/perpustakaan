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
            $table->unsignedBigInteger('id_publisher');
            $table->foreign('id_publisher')->references('id')->on('akuns')->onDelete('restrict');
            $table->string('cover')->nullable();
            $table->string('judul');
            $table->string('penerbit');
            $table->string('pengarang');
            $table->string('Tahun_Terbit');
            $table->text('sinopsis');
            $table->string('toko')->nullable();
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
        Schema::dropIfExists('tabel_bukus');
    }
}
