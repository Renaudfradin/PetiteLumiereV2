<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Series extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'posts_id'];

    public function legends(): BelongsToMany
    {
        return $this->belongsToMany(Legends::class, 'legends_series');
    }

    public function posts(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'posts_id');
    }
}
