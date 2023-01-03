<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 80);
            $table->string('level', 80);
            $table->string('img', 100);
            $table->string('job', 100);
            $table->string('exp', 100);
            $table->string('address', 100);
            $table->string('doctorLevel', 100);
            $table->string('experience', 80);
            $table->string('origin', 80);
            $table->string('prize', 80);
            $table->unsignedInteger('service_id');
            $table->timestamps();
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
