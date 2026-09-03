<?php

namespace App\Models;

use App\Models\Concerns\HasFallbackImage;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFallbackImage;

    protected $fillable = ['image', 'caption', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));
    }

    protected function fallbackImage(): string
    {
        return 'gallery/img1.jpeg';
    }
}
