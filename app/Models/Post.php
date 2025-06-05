<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }
}
