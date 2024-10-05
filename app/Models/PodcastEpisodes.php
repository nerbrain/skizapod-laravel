<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PodcastEpisodes extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'description',
        'url',
        'duration',
        'artworkUrl'
    ];

    public function podcast(): BelongsTo{
        return $this -> belongsTo(Podcast::class);
    }
}
