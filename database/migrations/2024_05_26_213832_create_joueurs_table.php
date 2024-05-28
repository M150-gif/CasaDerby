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
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id('id_joueur');
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->date('date_naissance');
            $table->string('nationalite', 50);
            $table->integer('taille')->nullable();
            $table->string('ancienne_equipe', 80)->nullable();
            $table->foreignId('id_equipe')->constrained('equipe');
            $table->string('poste', 70);
            $table->string('photo', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joueurs');
    }
};
