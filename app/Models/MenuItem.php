<?php

namespace App\Models;

use App\Models\Concerns\HasFallbackImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MenuItem extends Model
{
    use HasFallbackImage;

    protected $fillable = ['menu_category_id', 'name', 'price', 'price_promotional', 'description', 'image', 'order', 'active'];

    protected $casts = [
        'active' => 'boolean',
        'price' => 'decimal:2',
        'price_promotional' => 'decimal:2',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('active', fn ($query) => $query->where('active', true));
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class, 'menu_category_id');
    }

    public function allergenGuides(): BelongsToMany
    {
        return $this->belongsToMany(AllergenGuide::class);
    }

    protected function fallbackImage(): string
    {
        return 'menu/espetos.jpg';
    }
}
