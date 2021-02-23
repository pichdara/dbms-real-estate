<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district', function (Blueprint $table) {
            $table->id();
            $table->string('districtCode', 20);
            $table->string('provinceCode', 20);
            $table->string('districtNameEn', 20);
            $table->string('districtNameKh', 20);
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
        Schema::dropIfExists('district');
    }
}
