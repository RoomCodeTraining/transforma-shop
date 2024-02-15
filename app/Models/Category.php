<?php

namespace App\Models;

use App\Models\Traits\HasSlug;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes, HasUlids, HasSlug;

    protected $guarded = [];


    /**
     * Get the products for the category.
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}