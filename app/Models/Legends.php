<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Legends extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'url', 'active'];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
