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
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description', 2048)->nullable();
            $table->string('image')->nullable();
            $table->foreignId('categoryid')->nullable();
            $table->string('detail')->nullable();
            $table->string('location')->nullable();
            $table->string('heating')->nullable();
            $table->string('room_number')->nullable();
            $table->float('price')->nullable();
            $table->integer('size')->nullable();
            $table->integer('bath_number')->nullable();
            $table->integer('balcony_number')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('building_age')->nullable();
            $table->float('dues')->nullable();
            $table->foreignId('userid')->nullable();
            $table->string('status',50)->default('Active');
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
