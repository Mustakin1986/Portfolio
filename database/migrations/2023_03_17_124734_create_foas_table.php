<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('foas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('colops');
            $table->string('heading');
            $table->string('description');
            $table->string('question');
            $table->string('answer')->require();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foas');
    }
};
