<?php

namespace App\Http\Controllers;

use App\Field;
use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = Game::create($request->all());
        return Field::createFields($game);
    }
}
