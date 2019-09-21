<?php

namespace App;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Spatie\Sluggable\{HasSlug, SlugOptions};
use Spatie\MediaLibrary\HasMedia\{HasMedia, HasMediaTrait};
use Spatie\MediaLibrary\Models\Media;

class Work extends Model implements HasMedia
{
    use HasSlug, SoftDeletes, HasMediaTrait;

    protected $with = ['user'];

    protected $fillable = ['title', 'description', 'body', 'user_id'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('greyscale')
            ->greyscale()
            ->withResponsiveImages();

        $this->addMediaConversion('hero')
            ->withResponsiveImages()
            ->crop('crop-center', 1920, 680)
            ->width(1920)
            ->height(680)
            ->sharpen(10);
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
}
