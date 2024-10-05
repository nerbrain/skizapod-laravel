<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'description',
        'creator',
        'studio',
        'logoURL'
    ];

    public function podcastEpisode(): HasMany{
        return $this -> hasMany(PodcastEpisodes::class);
    }

}
