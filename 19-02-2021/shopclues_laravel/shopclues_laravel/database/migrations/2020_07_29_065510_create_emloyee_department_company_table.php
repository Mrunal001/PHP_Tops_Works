<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmloyeeDepartmentCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('depname');
            $table->timestamps();
        });


        
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('compname');
            $table->timestamps();
        });


        
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('depid')->unsigned();
            $table->foreign('depid')->references('id')->on('departments');
            $table->integer('compid')->unsigned();
            $table->foreign('compid')->references('id')->on('companies');
            $table->string('emname');
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->float('salary');
            $table->string('email');
            $table->text('address');
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
        Schema::dropIfExists('departments');
        Schema::dropIfExists('companies');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('emloyee_department_company');
    }
}
