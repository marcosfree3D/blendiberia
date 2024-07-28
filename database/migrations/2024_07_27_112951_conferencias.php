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
        Schema::create('conferencias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('url');
            $table->text('imagen');
            $table->text('descripcion');
            $table->string('descripcion_reducida');
            $table->date('fecha');
            $table->string('hora')->nullable()->change();
            $table->string('sala')->default('Cycles');
            $table->integer('id_ponente')->default(0);
            $table->string('ponente')->nullable()->change();
            $table->text('perfil_ponente')->nullable()->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferencias');
    }
};
