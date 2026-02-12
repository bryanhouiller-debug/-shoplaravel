<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    // Propriétés qui peuvent être assignées en masse
    protected $fillable = ['name', 'slug', 'description'];

    // Cast des attributs pour les convertir automatiquement
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    
}
