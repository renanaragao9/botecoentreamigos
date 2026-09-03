<?php

namespace App\Models;

use App\Models\Concerns\HasFallbackImage;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFallbackImage;

    protected $fillable = ['name', 'image', 'text', 'source', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));
    }

    protected function fallbackImage(): string
    {
        return 'testimonials/mulher.jpg';
    }
}
