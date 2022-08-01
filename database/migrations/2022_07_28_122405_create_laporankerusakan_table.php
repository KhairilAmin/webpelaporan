<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporankerusakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporankerusakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->unsignedBigInteger('fasilitas_id');
                $table->foreign('fasilitas_id')
                    ->references('id')->on('fasilitas')
                    ->onDelete('cascade');
             $table->string('judul');
            $table->string('tingkatkerusakan');
            $table->string('gambar');
            $table->text('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporankerusakan');
    }
}
