<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHealthInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_health_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('doctor_id');
            $table->double('V0001');
            $table->double('V1000');
            $table->double('V2000');
            $table->double('V3000');
            $table->double('V4000');
            $table->double('V4001');
            $table->double('V4002');
            $table->double('V4003');
            $table->double('V4004');
            $table->double('V4005');
            $table->double('V4006');
            $table->double('V4007');
            $table->double('V5001');
            $table->double('V5002');
            $table->double('V5003');
            $table->double('V5004');
            $table->double('V5005');
            $table->double('V5006');
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
        Schema::drop('user_health_infos');
    }
}
