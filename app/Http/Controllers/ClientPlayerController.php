<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class ClientPlayerController extends Controller
{
    public function index(Request $request)
    {
        $player = \DB::connection()->getSchemaBuilder()->getColumnListing((new Player)->getTable());
        $data = Player::all();
        return view('admin-pages.player.index', [
            'title' => 'Players',
            'records' => $data,
            'players' => $player,

        ]);
    }

    public function player()
    {
        $players = Player::all();

        return view('client-pages.player.index', [
            'players' => $players
        ]);
    }

    public function player_details($id)
    {
        $player = Player::find($id);

        if (!$player) {
            // Xử lý trường hợp không tìm thấy cầu thủ
            return redirect()->route('player.index')->with('error', 'Player not found.');
        }

        return view('client-pages.player-details.index', [
            'player' => $player,

        ]);
    }

}
