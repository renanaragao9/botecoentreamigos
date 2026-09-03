<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable = [
        'business_name',
        'hero_title',
        'hero_subtitle',
        'address',
        'open_hours',
        'email',
        'phone',
        'whatsapp',
        'instagram_url',
        'facebook_url',
        'map_embed_url',
        'seo_title',
        'seo_description',
    ];
}
