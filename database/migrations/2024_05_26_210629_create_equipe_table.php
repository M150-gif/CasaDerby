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
        Schema::create('equipe', function (Blueprint $table) {
            $table->id('id_equipe');
            $table->string('nom', 80);
            $table->string('nickname', 4);
            $table->string('logo', 150)->nullable();
            $table->date('date_fondation')->nullable();
            $table->string('president', 150)->nullable();
            $table->string('championnat_actuelle', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipe');
    }
};
