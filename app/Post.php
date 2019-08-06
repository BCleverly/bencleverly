<?php

namespace App;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Spatie\Sluggable\{HasSlug, SlugOptions};
use Laravel\Scout\Searchable;
use Rinvex\Categories\Traits\Categorizable;


class Post extends Model
{
    use Categorizable, Searchable, HasSlug, SoftDeletes;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
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
}
