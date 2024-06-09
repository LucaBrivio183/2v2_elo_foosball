<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    // Guarded data will not be auto-filled
    protected $guarded = [];
    // 
    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_player')->withPivot('player_rating');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

}
