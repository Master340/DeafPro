<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player; // Make sure this model exists

class RankController extends Controller
{
    public function index()
    {
        $players = Player::orderByDesc('elo')
            ->limit(100)
            ->paginate(15);

        return view('rank', compact('players'));
    }
}
