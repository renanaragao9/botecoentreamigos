<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuItem extends Model
{
    protected $fillable = ['menu_category_id', 'name', 'price', 'description', 'image', 'order', 'active'];

    protected $casts = ['active' => 'boolean'];

    protected static function booted(): void
    {
        static::addGlobalScope('active', fn ($query) => $query->where('active', true));
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class, 'menu_category_id');
    }
}
