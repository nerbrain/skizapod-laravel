<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PodcastEpisode extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'podcast_id',
        'name',
        'description',
        'url',
        'imageURL'
    ];

    public function podcast(): BelongsTo{
        return $this -> belongsTo(Podcast::class);
    }
}
