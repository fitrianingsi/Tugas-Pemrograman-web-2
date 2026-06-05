<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'genre_id',
        'director',
        'release_year',
        'rating',
        'poster',
        'synopsis',
        'status'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
