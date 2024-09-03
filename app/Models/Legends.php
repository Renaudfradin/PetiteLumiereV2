<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Legends extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'url', 'active', 'series_id'];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class, 'series_id');
    }
}
