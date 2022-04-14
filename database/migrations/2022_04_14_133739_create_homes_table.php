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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('keywords')->nullable();
            $table->string('description', 2048)->nullable();
            $table->string('image')->nullable();
            $table->foreignId('categoryid');
            $table->string('detail');
            $table->string('location');
            $table->string('heating');
            $table->string('room_number');
            $table->float('price')->nullable();
            $table->integer('size');
            $table->string('heating');
            $table->string('bath_number');
            $table->string('balcony_number');
            $table->string('floor');
            $table->string('building_age');
            $table->string('dues');
            $table->string('status',6)->nullable();
            $table->timestamp('expire_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homes');
    }
};
