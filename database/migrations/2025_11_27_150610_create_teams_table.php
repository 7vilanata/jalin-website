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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tournament_id')->constrained()->cascadeOnDelete(); // Foreign key to the tournaments table
            $table->string('name');          // Team name (e.g., Team Lemon)
            $table->unsignedInteger('points')->default(0); // Points in the tournament
            $table->unsignedInteger('position')->nullable();
            $table->boolean('is_published')->default(false);
            $table->boolean('is_eliminated')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
