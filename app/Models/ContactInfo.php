<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable = ['address', 'open_hours', 'email', 'phone', 'whatsapp', 'map_embed_url'];
}
