<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_xxxxxx_create_categories_table.php
public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('categories');
}

};
