<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_components', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->integer('year');
            $table->string('month');
            $table->string('sex');
            $table->float('weight');
            $table->double('V0001');
            $table->double('V1000');
            $table->double('V2000');
            $table->double('V2001');
            $table->double('V2002');
            $table->double('V2003');
            $table->double('V3000');
            $table->double('V3001');
            $table->double('V3002');
            $table->double('V3003');
            $table->double('V3004');
            $table->double('V3005');
            $table->double('V3006');
            $table->double('V3007');
            $table->double('V3008');
            $table->double('V3009');
            $table->double('V3010');
            $table->double('V3011');
            $table->double('V3012');
            $table->double('V4000');
            $table->double('V4001');
            $table->double('V4002');
            $table->double('V4003');
            $table->double('V4004');
            $table->double('V4005');
            $table->double('V4006');
            $table->double('V4007');
            $table->double('V4008');
            $table->double('V4009');
            $table->double('V4010');
            $table->double('V4011');
            $table->double('V4012');
            $table->double('V4013');
            $table->double('V4014');
            $table->double('V4015');
            $table->double('V4016');
            $table->double('V4017');
            $table->double('V5000');
            $table->double('V5001');
            $table->double('V5002');
            $table->double('V5003');
            $table->double('V5004');
            $table->double('V5005');
            $table->double('V5006');
            $table->double('V5007');
            $table->double('V5008');
            $table->double('V5009');
            $table->double('V5010');
            $table->double('V5011');
            $table->double('V5012');
            $table->double('V5013');
            $table->double('V5014');
            $table->double('V5015');
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
        Schema::drop('main_components');
    }
}
