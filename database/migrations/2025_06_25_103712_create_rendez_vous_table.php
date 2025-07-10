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
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->id('IdRv');
            $table->dateTime('DateRv');
            $table->string('Statut', 20)->nullable();
    
            $table->unsignedBigInteger('IdPatient')->nullable();
            $table->unsignedBigInteger('IdMedecin')->nullable();
            $table->unsignedBigInteger('IdSoin')->nullable();
    
            $table->timestamps();
    
            $table->foreign('IdPatient')->references('idU')->on('patients')->onDelete('set null');
            $table->foreign('IdMedecin')->references('idU')->on('medecins')->onDelete('set null');
            $table->foreign('IdSoin')->references('IdSoin')->on('soins')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vous');
    }
};
