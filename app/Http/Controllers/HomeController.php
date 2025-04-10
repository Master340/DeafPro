<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $topPlayers = Player::orderByDesc('elo')->take(10)->get();

        return view('home', compact('topPlayers'));
    }
}
