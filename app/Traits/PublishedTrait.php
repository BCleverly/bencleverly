<?php

namespace App\Traits;

trait PublishedTrait {
    /**
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        if (!auth()->check()) {
            return $query->where('publish_at', '!=', null);
        }
    }
}
