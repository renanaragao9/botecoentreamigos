<?php

namespace App\Models;

use App\Models\Concerns\HasFallbackImage;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFallbackImage;

    protected $fillable = ['name', 'image', 'facebook_url', 'instagram_url', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));
    }

    protected function fallbackImage(): string
    {
        return 'chefs/chef.jpeg';
    }
}
