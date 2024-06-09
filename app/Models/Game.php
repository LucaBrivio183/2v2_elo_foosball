<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'game_team')->withPivot('team_rating');
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'game_player')->withPivot('player_rating');
    }
}

