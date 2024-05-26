<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_commandes_table.php
public function up()
{
    Schema::create('commandes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('client_id');
        $table->foreign('client_id')->references('id')->on('clients'); 
        $table->date('date_cmd');
        $table->decimal('montant_totale', 8, 2);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('commandes');
}
};
