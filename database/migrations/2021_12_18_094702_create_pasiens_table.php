<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_spesialis')->unsigned();
            $table->integer('no_token')->unsigned();
            $table->string('nama_pasien');
            $table->string('alamat');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->integer('umur')->unsigned();
            $table->text('penyakit');
            $table->text('detail_perawatan');
            $table->string('status');
            $table->foreign('id_spesialis')->references('id')->on('spesialis');
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
        Schema::dropIfExists('pasiens');
    }
}
