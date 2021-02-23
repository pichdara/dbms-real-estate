<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->string('refID', 10);
            $table->string('estateName', 100);
            $table->integer('estateTypeId');
            $table->decimal('price', 20);
            $table->integer('lenth');
            $table->integer('width');
            $table->enum('roadCondition', array('good', 'bad', 'big'));
            $table->integer('floor');
            $table->integer('numOfBedroom');
            $table->integer('numOfBathroom');
            $table->integer('kitchen');
            $table->integer('livingRoom');
            $table->enum('direction', array('North', 'West', 'East', 'South'));
            $table->text('description');
            $table->integer('locationId');
            $table->dateTime('createDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates');
    }
}
