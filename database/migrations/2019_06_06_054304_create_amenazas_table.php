<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenazas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_amenaza');
            $table->string('descripcion');
            $table->bigInteger('activo_id')->unsigned();
            $table->foreign('activo_id')->references('id')->on('activos')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['id_amenaza','activo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenazas');
    }
}
