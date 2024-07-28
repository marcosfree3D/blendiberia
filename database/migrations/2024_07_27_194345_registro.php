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
        Schema::create('registro', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->text('comentarios');
            $table->integer('personas')->default(1);
            $table->boolean('accepto_politica_privacidad')->default(false);
            $table->boolean('blendiberia')->default(false);
            $table->boolean('talleres')->default(false);
            $table->boolean('aeub')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro');
    }
};
