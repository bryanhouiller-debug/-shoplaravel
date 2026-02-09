<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID du produit
            $table->string('name'); // Nom du produit
            $table->text('description')->nullable(); // Description du produit (nullable)
            $table->decimal('price', 8, 2); // Prix avec 8 chiffres max et 2 décimales
            $table->foreignId('category_id')->constrained(); // Clé étrangère vers categories
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
