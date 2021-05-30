<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akuns', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedint ('id');
            $table->string ('username', 20);
            $table->string ('email');
            $table->string ('password', 16);
            // $table->('level');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akuns');
    }
}
