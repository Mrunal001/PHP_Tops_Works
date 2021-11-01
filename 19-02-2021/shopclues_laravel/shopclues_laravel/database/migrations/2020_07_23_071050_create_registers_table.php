<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('password');
            $table->string('email')->nullable();
            $table->bigInteger('mobile');
            $table->string('gender');
            $table->string('branch');
            $table->string('role');
            
            $table->integer('cid');
            $table->integer('sid');
            $table->integer('ctid');

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
        Schema::dropIfExists('registers');
    }
}
