<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_ligne_commandes_table.php
public function up()
{
    Schema::create('ligne_commandes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('commande_id');
        $table->unsignedBigInteger('product_id');
        $table->integer('qte_commande');
        $table->decimal('prix_par_ligne', 8, 2);
        $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('ligne_commandes');
}

};
