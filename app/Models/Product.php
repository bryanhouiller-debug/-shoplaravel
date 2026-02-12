<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;




class Product extends Model
{
    use HasFactory;

    // Propriétés qui peuvent être assignées en masse
    protected $fillable = ['name', 'slug', 'description', 'price', 'stock', 'category_id', 'active', 'image'];

    // Cast des attributs pour les convertir automatiquement
    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];
     public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
