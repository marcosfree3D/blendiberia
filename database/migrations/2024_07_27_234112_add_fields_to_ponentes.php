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
        Schema::table('ponentes', function (Blueprint $table) {
            $table->text('cv')->nullable(true);
            $table->string('web')->nullable(true);
            $table->string('artstation')->nullable(true);
            $table->string('discord')->nullable(true);
            $table->string('instagram')->nullable(true);
            $table->string('cara')->nullable(true);
            $table->string('twitter_x')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('tiktok')->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ponentes', function (Blueprint $table) {
            //

        });
    }
};
