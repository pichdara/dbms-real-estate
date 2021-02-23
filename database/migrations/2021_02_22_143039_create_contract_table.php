<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->id();
            $table->integer('contractTypeId');
            $table->integer('clientId');
            $table->text('contractDetail');
            $table->decimal('feePercentage', 5);
            $table->decimal('feeAmount', 20);
            $table->string('transactionCode', 10);
            $table->dateTime('signDate');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->decimal('payAmount', 20);
            $table->integer('numOfInvoice',);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract');
    }
}
