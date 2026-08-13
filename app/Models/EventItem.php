<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventItem extends Model
{
    protected $fillable = ['title', 'description', 'image', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));
    }

    public function features(): HasMany
    {
        return $this->hasMany(EventFeature::class);
    }
}
