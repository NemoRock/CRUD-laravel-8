<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $guarded = false;

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_genres');
    }
}
