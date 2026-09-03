<?php

namespace App\Models;

use App\Models\Concerns\HasFallbackImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventItem extends Model
{
    use HasFallbackImage;

    protected $fillable = ['title', 'description', 'image', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));
    }

    public function features(): HasMany
    {
        return $this->hasMany(EventFeature::class);
    }

    protected function fallbackImage(): string
    {
        return 'events/aniversario.jpeg';
    }
}
