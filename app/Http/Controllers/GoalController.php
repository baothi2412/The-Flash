<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;

class GoalController extends Controller
{
    // GET: /admin/goals
    public function index() {
        $club = \DB::connection()->getSchemaBuilder()->getColumnListing((new Goal)->getTable());
        $data = Goal::all();
        return view('test', [
            'club' => $club,
            'title' => 'TEST',
            'records' => $data
        ]);
    }
}
