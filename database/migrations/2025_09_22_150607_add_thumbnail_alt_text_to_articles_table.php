<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            // Add 'thumbnail_alt_text' column after the 'thumbnail' column
            $table->string('thumbnail_alt_text')->nullable()->after('thumbnail');
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            // Drop 'thumbnail_alt_text' column
            $table->dropColumn('thumbnail_alt_text');
        });
    }
};
