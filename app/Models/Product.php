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
use Illuminate\Database\Query\Builder;
use Spatie\Image\Exceptions\InvalidManipulation;

class Product extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, HasUlids, HasSlug, InteractsWithMedia;


    protected $guarded = [];

    /**
     * Get the route key for the model.
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the category that owns the Product
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The items that belong to the Product
     * @return BelongsToMany
     */
    public function items() : BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_items')->withPivot('quantity');
    }

    /**
     * Get a new query builder for the model's table.
     * @param Builder $query
     * @return ProductBuilder
     */
    public function newEloquentBuilder($query) : ProductBuilder
    {
        return new \App\Builders\Product\ProductBuilder($query);
    }

    /**
     * Register the media collections
     * @param Media|null $media
     * @return void
     * @throws InvalidManipulation
     */
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

    public function images() : Attribute
    {
        return new Attribute(
            get : function () {
                if($this->getMedia('product-images')) {
                    $image =  $this->getMedia('product-images');
                    $images =  $image->map(function ($item) {
                        return $item->getUrl();
                    });

                    // ignore the first image
                    return $images;
                }
                return "https://group-alliancegulf.com/wp-content/uploads/2022/01/huile-de-palme-_-group-alliancegulf.com_.jpg";
            }
        );
    }





}