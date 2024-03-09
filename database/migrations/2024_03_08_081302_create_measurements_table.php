<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->foreign('nik')->references('nik')->on('children')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_pengukuran');
            $table->decimal('berat_badan');
            $table->decimal('panjang_badan');
            $table->decimal('lingkar_kepala')->nullable();
            $table->string('cara_pengukuran');
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
        Schema::dropIfExists('measurements');
    }
}
