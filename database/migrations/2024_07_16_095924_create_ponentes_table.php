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
        Schema::create('ponentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('url');
            $table->string('cargo');
            $table->text('imagen_perfil');
            $table->text('curriculum')->nullable()->change();
            $table->string('artstation')->nullable()->change();
            $table->string('instagram')->nullable()->change();
            $table->string('web')->nullable()->change();
            $table->string('discord')->nullable()->change();
            $table->string('twitter')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ponentes');
    }
};
