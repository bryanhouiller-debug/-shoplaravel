<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
{
    DB::table('categories')->insert([
        [
            'name' => 'Électronique',
            'slug' => 'electronique',
            'description' => 'Produits électroniques et high-tech',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Vêtements',
            'slug' => 'vetements',
            'description' => 'Mode et habillement',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Maison',
            'slug' => 'maison',
            'description' => 'Articles pour la maison',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Sports',
            'slug' => 'sports',
            'description' => 'Équipements sportifs',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Livres',
            'slug' => 'livres',
            'description' => null, // description optionnelle
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}

    }
}
