<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->float('monto', 20,2);
            $table->boolean('aprobado')->default(false);

            $table->string('comprobanteEmisor')->nullable();
            $table->string('comprobanteReceptor')->nullable();

            $table->unsignedBigInteger('receptor_id');
            $table->foreign('receptor_id')->references('id')->on('users');

            $table->unsignedBigInteger('emisor_id');
            $table->foreign('emisor_id')->references('id')->on('users');
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
        Schema::dropIfExists('solicituds');
    }
}
