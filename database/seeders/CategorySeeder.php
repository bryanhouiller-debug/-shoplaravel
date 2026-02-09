<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Electronique', 'slug' => 'electronique', 'description' => 'Produits électroniques.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vêtements', 'slug' => 'vetements', 'description' => 'Vêtements pour tous.', 'created_at' => now(), 'updated_at' => now()],
            // Ajoute plus de catégories ici...
        ]);
    }
}
