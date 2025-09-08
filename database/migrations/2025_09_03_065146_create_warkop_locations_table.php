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
        Schema::create('warkop_locations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->string('thumbnail')->nullable();
            $table->string('street_loc')->nullable();
            $table->float('x');
            $table->float('y');
            $table->string('loc_link');
            $table->boolean('is_published')->default(false);
            $table->string('type_hub');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warkop_locations');
    }
};
