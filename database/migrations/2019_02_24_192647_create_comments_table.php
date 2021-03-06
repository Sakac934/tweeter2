<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('tweet_id')->unsigned()->index();
            $table->text('comment');
            // $table->integer('user_id')->unsigned()->references('id')->on('users')->onDelete('cascade');
            // $table->integer('tweet_id')->unsigned()references('id')->on('tweets')->onDelete('cascade');
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
        // Schema::dropIfExists('tweets');
        Schema::dropIfExists('comments');
    }
}
