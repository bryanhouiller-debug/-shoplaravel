<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Colonne ID auto-incrémentée
            $table->string('name'); // Colonne 'name' (chaîne de caractères)
            $table->string('slug')->unique(); // Colonne 'slug' (chaîne unique pour l'URL)
            $table->text('description')->nullable(); // Colonne 'description' (texte, nullable)
            $table->timestamps(); // Colonne 'created_at' et 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
