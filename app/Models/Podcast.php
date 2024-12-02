<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'description',
        'logoURL'
    ];

    public function genre(): BelongsTo{
        return $this -> belongsTo(Genre::class);
    }
}
