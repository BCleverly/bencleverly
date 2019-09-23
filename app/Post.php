<?php

namespace App;

use App\Traits\{PublishedTrait};
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Spatie\Sluggable\{HasSlug, SlugOptions};
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Post extends Model implements HasMedia
{
    use HasSlug, SoftDeletes, HasMediaTrait, PublishedTrait;

    protected $with = ['user'];

    protected $fillable = ['title', 'description', 'body', 'user_id'];

    protected $dates = [
        'publish_at'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('post-greyscale')
            ->greyscale()
            ->withResponsiveImages();

        $this->addMediaConversion('post-hero')
            ->withResponsiveImages()
            ->crop('crop-center', 1920, 680)
            ->width(1920)
            ->height(680)
            ->sharpen(10);
    }
}
