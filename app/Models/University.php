<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class University extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected static function booted()
    {
        static::addGlobalScope('order', function (\Illuminate\Database\Eloquent\Builder $builder) {
            $builder->orderBy('sort_order', 'asc');
        });
    }
}
