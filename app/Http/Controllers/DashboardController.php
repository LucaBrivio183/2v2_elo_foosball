<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Game;

class DashboardController extends Controller
{
    public function index()
    {
        $players = Player::orderBy('rating', 'desc')->get();
        $games = Game::all(); 
        return view('dashboard', compact('players', 'games'));
    }
}
