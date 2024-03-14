<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Legends extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'url', 'active', 'post_id'];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
