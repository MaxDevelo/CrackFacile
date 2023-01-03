<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\games;
class GameController extends Controller
{
    public function showgame(Request $request, $slug){

        $game = games::find($slug);
        return view('showgame')
            ->with('game', $game);
    }
}
