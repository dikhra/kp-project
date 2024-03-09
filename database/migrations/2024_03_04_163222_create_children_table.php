<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->integer('anak_ke');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->bigInteger('no_kk');
            $table->bigInteger('nik')->unique();
            $table->string('nama');
            $table->float('berat_badan');
            $table->integer('panjang_badan');
            $table->string('nama_ortu');
            $table->bigInteger('nik_ortu');
            $table->string('no_ortu');
            $table->string('alamat_lengkap');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
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
        Schema::dropIfExists('children');
    }
}
