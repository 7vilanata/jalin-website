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
        Schema::create('sponsor_and_presenters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_published')->default(false);
            $table->string('logo')->nullable();
            $table->enum('role', ['presenter', 'sponsor']); // Role to differentiate between Presenter and Sponsor
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsor_and_presenters');
    }
};
