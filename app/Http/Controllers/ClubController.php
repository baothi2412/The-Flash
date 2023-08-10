<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
class ClubController extends Controller
{
    public function index(Request $request) {
        $clubs =\DB::connection()->getSchemaBuilder()->getColumnListing((new Club)->getTable());
        $data = Club::all();
        return view('admin-pages.club.index', [
            'title' => 'Players',
            'records'=>$data,
            'clubs'=>$clubs,

        ]);
    }
}
