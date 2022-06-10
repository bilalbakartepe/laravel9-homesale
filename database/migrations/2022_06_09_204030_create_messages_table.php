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
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncreament();
            $table->string('name',50);
            $table->string('email',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('subject',50)->nullable();
            $table->string('message',50)->nullable();
            $table->string('note',50)->nullable();
            $table->string('ip',50)->nullable();
            $table->string('status',50)->nullable()->default('New');
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
        Schema::dropIfExists('messages');
    }
};
