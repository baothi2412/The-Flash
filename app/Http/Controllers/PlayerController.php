<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
class PlayerController extends Controller
{
    public function index(Request $request) {
        $player =\DB::connection()->getSchemaBuilder()->getColumnListing((new Player)->getTable());
        $data = Player::all();
        return view('admin-pages.player.index', [
            'title' => 'Players',
            'records'=>$data,
            'players'=>$player,

        ]);
    }
}
