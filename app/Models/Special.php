<?php

namespace App\Models;

use App\Models\Concerns\HasFallbackImage;
use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    use HasFallbackImage;

    protected $fillable = ['title', 'subtitle', 'description', 'image', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));
    }

    protected function fallbackImage(): string
    {
        return 'specials/feijao.jpeg';
    }
}
