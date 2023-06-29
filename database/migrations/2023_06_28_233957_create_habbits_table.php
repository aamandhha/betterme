<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('habbits', function (Blueprint $table) {
            $table->id('Habbit_ID');
            $table->string('HabbitName', 30);
            $table->integer('Year');
            $table->integer('Month');

            $table->unsignedBigInteger('Owner_FK');
            $table->foreign('Owner_FK')->references('User_ID')->on('users');

            $table->unsignedBigInteger('Progress_FK');
            $table->foreign('Progress_FK')->references('Progress_ID')->on('progress');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habbits');
    }
};
