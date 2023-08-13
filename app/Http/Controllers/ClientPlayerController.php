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
    // Retrieve all players
    $players = Player::all();

    // Pass the players data to the player index view
    return view('client-pages.player.index', [
        'players' => $players
    ]);
}

public function player_client()
{
    // Lấy danh sách tất cả cầu thủ từ bảng players
    $players = Player::all();

    // Truyền dữ liệu cầu thủ tới view "client"
    return view('client', [
        'players' => $players,
    ]);
}

public function player_details($id)
{
    // Find the player by ID
    $player = Player::find($id);

    // Check if the player was found
    if (!$player) {
        // Handle the case when the player is not found
        return redirect()->route('player.index')->with('error', 'Player not found.');
    }

    // Pass the player data to the player details view
    return view('client-pages.player-details.index', [
        'player' => $player,
    ]);
}


}
