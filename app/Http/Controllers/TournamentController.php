<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
class TournamentController extends Controller
{
    //

    public function index(Request $request) {
        $tournament =\DB::connection()->getSchemaBuilder()->getColumnListing((new Tournament)->getTable());
        $data =Tournament::all();
        return view('admin-pages.tournaments.index', [
            'title' => 'Tournament',
            'records'=>$data,
            'tournaments'=>$tournament,

        ]);
    }


}
