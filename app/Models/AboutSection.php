<?php

namespace App\Models;

use App\Models\Concerns\HasFallbackImage;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFallbackImage;

    protected $fillable = ['title', 'intro_text', 'closing_text', 'image'];

    protected function fallbackImage(): string
    {
        return 'about/barrrr.jpeg';
    }
}
