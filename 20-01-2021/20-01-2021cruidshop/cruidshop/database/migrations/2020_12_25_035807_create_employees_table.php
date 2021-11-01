<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('depid')->unsigned();
            $table->foreign('depid')->references('id')->on('departments');
            $table->integer('compid')->unsigned();
            $table->foreign('compid')->references('id')->on('companies');         
            $table->string('empname');
            $table->string('password');
            $table->string('email');
            $table->text('address');
            $table->float('salary');
            $table->integer('pincode');
            $table->string('photo');
            
            
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
        Schema::dropIfExists('employees');
    }
}
