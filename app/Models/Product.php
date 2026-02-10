<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Product extends Model
{
    use HasFactory;

    // Propriétés qui peuvent être assignées en masse
    protected $fillable = ['name', 'description', 'price', 'category_id', 'active'];

    // Cast des attributs pour les convertir automatiquement
    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];
}
