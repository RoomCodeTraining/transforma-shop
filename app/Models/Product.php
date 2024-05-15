<?php

namespace App\Models;

use App\Models\Traits\HasSlug;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use App\Builders\Product\ProductBuilder;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, HasUlids, HasSlug, InteractsWithMedia;


    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function items() : BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_items')->withPivot('quantity');
    }

    public function newEloquentBuilder($query) : ProductBuilder
    {
        return new \App\Builders\Product\ProductBuilder($query);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
           ->width(368)
           ->height(232)
           ->sharpen(10)
           ->nonOptimized();
    }

    public function image() : Attribute
    {
        return new Attribute(
            get : function () {
                if($this->getFirstMediaUrl('product-images')) {
                    return $this->getFirstMediaUrl('product-images');
                }

                return "https://group-alliancegulf.com/wp-content/uploads/2022/01/huile-de-palme-_-group-alliancegulf.com_.jpg";
            }
        );
    }

}
