<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommuneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commune', function (Blueprint $table) {
            $table->id();
            $table->string('communeCode', 20);
            $table->string('districtCode', 20);
            $table->string('communeNameEn', 20);
            $table->string('communeNameKh', 20);
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
        Schema::dropIfExists('commune');
    }
}
