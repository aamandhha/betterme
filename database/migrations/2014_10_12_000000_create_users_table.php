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
        Schema::create('users', function (Blueprint $table) {
            $table->id('User_ID');
            $table->string('FullName', 45);
            $table->string('Username', 20);
            $table->string('Email', 255);
            $table->unique('Email');
            $table->string('Password', 45);
            $table->string('Avatar', 255)->default('https://i.postimg.cc/N0cRgFj7/missing-avtr.png');
            $table->string('Status', 5)->default('User');
            $table->string('Language', 3)->default('ENG');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
