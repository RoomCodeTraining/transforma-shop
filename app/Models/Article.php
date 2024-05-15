<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Exceptions\InvalidManipulation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;

    protected $guarded = [];

    /**
     *
     * @return void
     */
    public static function booted()
    {
        static::creating(function ($article) {
            $article->user_id = auth()->id();
        });
    }

    /**
     *
     * @return BelongsTo
     */
    public function writter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     *
     * @param mixed $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('is_published', true);
    }

    /**
     *
     * @param App\Models\Media|null $media
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
}
