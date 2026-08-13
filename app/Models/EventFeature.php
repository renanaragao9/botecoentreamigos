<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventFeature extends Model
{
    protected $fillable = ['event_item_id', 'text', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));
    }
}
