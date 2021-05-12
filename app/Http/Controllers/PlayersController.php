<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index(){
        $params = [
            'test' => 'これはテストです。',
            'sample' => 'これはサンプルです。'
        ];

        return view('players.index', compact('params'));
        
    }
}
