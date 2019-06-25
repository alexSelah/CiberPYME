<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalvavulnerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salvavulneras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo');
            $table->string('descripcion');
            $table->bigInteger('amenaza_id')->unsigned();
            $table->foreign('amenaza_id')->references('id')->on('amenazas')->onDelete('cascade');
            $table->unique(['amenaza_id','tipo','descripcion']);
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
        Schema::dropIfExists('salvavulneras');
    }
}
