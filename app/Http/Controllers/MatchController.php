<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\MyMatch;
class MatchController extends Controller
{
    public function index(Request $request) {
        $match=\DB::connection()->getSchemaBuilder()->getColumnListing((new MyMatch)->getTable());
        $data = MyMatch::all();
        return view('admin-pages.matches.index', [
            'title' => 'Matches',
            'records'=>$data,
            'matches'=>$match,

        ]);
    }

}
