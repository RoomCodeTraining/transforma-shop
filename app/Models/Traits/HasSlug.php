<?php
namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasSlug
{

    /**
     * The "booted" method of the model.
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
}