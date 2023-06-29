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
        Schema::create('progress', function (Blueprint $table) {
            $table->id('Progress_ID');
            $table->integer('Day_1')->default(0);
            $table->integer('Day_2')->default(0);
            $table->integer('Day_3')->default(0);
            $table->integer('Day_4')->default(0);
            $table->integer('Day_5')->default(0);
            $table->integer('Day_6')->default(0);
            $table->integer('Day_7')->default(0);
            $table->integer('Day_8')->default(0);
            $table->integer('Day_9')->default(0);
            $table->integer('Day_10')->default(0);
            $table->integer('Day_11')->default(0);
            $table->integer('Day_12')->default(0);
            $table->integer('Day_13')->default(0);
            $table->integer('Day_14')->default(0);
            $table->integer('Day_15')->default(0);
            $table->integer('Day_16')->default(0);
            $table->integer('Day_17')->default(0);
            $table->integer('Day_18')->default(0);
            $table->integer('Day_19')->default(0);
            $table->integer('Day_20')->default(0);
            $table->integer('Day_21')->default(0);
            $table->integer('Day_22')->default(0);
            $table->integer('Day_23')->default(0);
            $table->integer('Day_24')->default(0);
            $table->integer('Day_25')->default(0);
            $table->integer('Day_26')->default(0);
            $table->integer('Day_27')->default(0);
            $table->integer('Day_28')->default(0);
            $table->integer('Day_29')->default(0);
            $table->integer('Day_30')->default(0);
            $table->integer('Day_31')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
