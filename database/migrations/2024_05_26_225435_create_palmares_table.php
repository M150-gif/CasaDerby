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
        Schema::create('palmares', function (Blueprint $table) {
            $table->id('id_palmares');
            $table->string('nom_titre', 150);
            $table->date('annee');
            $table->foreignId('id_competition')->constrained('competition');
            $table->foreignId('id_equipe')->constrained('equipe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('palmares');
    }
};
