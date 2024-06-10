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
        Schema::create('profesors', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('nombre_completo');
            $table->string('imagen1')->nullable();
            $table->string('imagen2')->nullable();
            $table->string('correo');
            $table->integer('nivel');
            $table->integer('rango');
            $table->integer('copas');
            $table->text('frase');
            $table->json('semestres');
            $table->integer('dificultad');
            $table->integer('reprobacion');
            $table->integer('paciencia');
            $table->integer('caracter');
            $table->json('horarios');
            $table->json('skills');
            $table->json('clases');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesors');
    }
};
