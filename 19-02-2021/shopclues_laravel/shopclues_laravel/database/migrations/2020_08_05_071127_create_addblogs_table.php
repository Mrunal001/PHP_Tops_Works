<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addblogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catid')->unsigned();
            $table->foreign('catid')->references('id')->on('categories');
            $table->string('title');
            $table->string('image');
            $table->string('registered_date');
            $table->text('description');
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
        Schema::dropIfExists('addblogs');
    }
}
