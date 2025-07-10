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
        Schema::create('medecins', function (Blueprint $table) {
            $table->id('idU');
            $table->string('NomPrenom');
            $table->string('Tel');
            $table->string('Email');
            $table->string('Adresse');
            $table->string('Identifiant')->nullable(true);
            $table->string('MotDePasse')->nullable(true);
            $table->boolean('Statut')->nullable(true);
            $table->string('Specialite');
            $table->string('NumeroOrdre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecins');
    }
};
