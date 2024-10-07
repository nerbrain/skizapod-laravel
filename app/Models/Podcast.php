<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Podcast extends Model
{
    use HasFactory, HasUuids;

    protected $fillable =
    [
        'name',
        'description',
        'logoURL'
    ];

    public function podcastEpisode(): HasMany{
        return $this -> hasMany(PodcastEpisodes::class);
    }

}
