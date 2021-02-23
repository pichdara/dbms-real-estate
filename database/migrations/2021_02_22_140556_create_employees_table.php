<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->stirng('employeeID', 10);
            $table->integer('employeeTypeId');
            $table->stirng('lastName', 20);
            $table->stirng('firstName', 20);
            $table->integer('employeeID');
            $table->enum('gender', array('male', 'female', 'other'));
            $table->stirng('email', 50);
            $table->stirng('phoneNum', 20);
            $table->text('address');
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
