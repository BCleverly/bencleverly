<?php

namespace App\Traits;

trait LatestTrait {
    public function scopeLatest($query, $limit = 1) {
        return $query->where('created_at', 'Desc')->limit($limit);
    }
}
