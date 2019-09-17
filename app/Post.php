<?php

namespace App;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Spatie\Sluggable\{HasSlug, SlugOptions};
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasSlug, SoftDeletes;

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

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
