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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('name');          // Tournament name (e.g., Futsal SMA)
            $table->string('slug')->unique(); // Slug used to identify the tournament
            $table->string('game');          // The game (e.g., Futsal, Mobile Legend)
            $table->string('chart_image')->nullable(); // Path to the bracket image (nullable)
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
