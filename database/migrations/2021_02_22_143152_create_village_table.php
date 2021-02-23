<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('village', function (Blueprint $table) {
            $table->id();
            $table->string('villageCode', 20);
            $table->string('communeCode', 20);
            $table->string('villageNameEn', 20);
            $table->string('villageNameKh', 20);
            $table->string('addressEn', 40);
            $table->string('addressKh', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('village');
    }
}
