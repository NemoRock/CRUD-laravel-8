<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $guarded = false;

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'game_genres');
    }
}
