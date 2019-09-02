<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('receptor_id');
            $table->foreign('receptor_id')->references('id')->on('users');

            $table->unsignedBigInteger('emisor_id');
            $table->foreign('emisor_id')->references('id')->on('users');

            $table->integer('sala_id');

            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');



            $table->text('mensaje');

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
        Schema::dropIfExists('chats');
    }
}
