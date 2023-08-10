<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
class PositionMatchController extends Controller
{
    public function index(Request $request) {
        $position =\DB::connection()->getSchemaBuilder()->getColumnListing((new Position)->getTable());
        $data = Position::all();
        return view('admin-pages.position.index', [
            'title' => 'Position',
            'records'=>$data,
            'position'=>$position,

        ]);
    }
}
