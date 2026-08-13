<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class MenuCategory extends Model
{
    protected $fillable = ['name', 'slug', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope('ordered', fn ($query) => $query->orderBy('order'));

        static::saving(function (MenuCategory $category) {
            if (blank($category->slug) || $category->isDirty('name')) {
                $category->slug = static::uniqueSlugFor($category->name, $category->id);
            }
        });
    }

    protected static function uniqueSlugFor(string $name, ?int $ignoreId = null): string
    {
        $base = 'filter-' . Str::slug($name);
        $slug = $base;
        $i = 1;

        while (
            static::withoutGlobalScopes()
                ->where('slug', $slug)
                ->when($ignoreId, fn ($query) => $query->whereKeyNot($ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . ++$i;
        }

        return $slug;
    }

    public function items(): HasMany
    {
        return $this->hasMany(MenuItem::class);
    }
}
