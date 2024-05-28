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
        Schema::create('classement', function (Blueprint $table) {
            $table->id('id_classement');
            $table->integer('position_equipe');
            $table->integer('nbr_match_joue');
            $table->integer('nbr_gaints');
            $table->integer('nbr_pertes');
            $table->integer('nbr_null');
            $table->foreignId('id_equipe')->constrained('equipe');
            $table->foreignId('id_competition')->constrained('competition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classement');
    }
};
