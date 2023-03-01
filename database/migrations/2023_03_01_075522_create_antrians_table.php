<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('poli');
            $table->unsignedBigInteger('nama_pasien');
            $table->integer('no_antrian');
            $table->timestamps();

            $table->foreign('poli')->references('id')->on('polis');
            $table->foreign('nama_pasien')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrians');
    }
};
