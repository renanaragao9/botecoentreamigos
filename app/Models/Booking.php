<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'time',
        'people',
        'event_type',
        'message',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
            'people' => 'integer',
        ];
    }
}
