<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('uid');
            $table->string('fname');
            $table->string('lname');
            $table->string('uname');
            $table->string('email');
            $table->string('password');
            $table->string('gender');
            $table->string('hobby');
            $table->bigInteger('mobile');
            $table->integer('pincode');
            $table->text('address');
          
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
