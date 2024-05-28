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
        Schema::create('matchs', function (Blueprint $table) {
            $table->id('id_match');
            $table->dateTime('date_match');
            $table->string('lieu', 150);
            $table->string('etat', 50);
            $table->string('score', 50)->nullable();
            $table->foreignId('id_competition')->constrained('competition');
            $table->foreignId('id_equipe_1')->constrained('equipe');
            $table->foreignId('id_equipe_2')->constrained('equipe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchs');
    }
};
