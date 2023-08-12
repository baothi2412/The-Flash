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
    public function detail($id) {
        $goal = Goal::find($id);

        return response()->json([
            'goal' => $goal
        ]);
    }
    public function store(Request$request){
        $id = $request->input('id');
        $matchID = $request->input('MatchID');
        $scoringPlayerID = $request->input('ScoringPlayerID');
        $assistingPlayerID = $request->input('AssistingPlayerID');
        $minute = $request->input('Minute');
   

        $goal = new Goal();
        
       
        $goal->id = $$id;
        $goal->MatchID = $matchID;
        $goal->ScoringPlayerID = $scoringPlayerID;
        $goal->AssistingPlayerID = $assistingPlayerID;
        $goal->Minute = $minute;

        $goal->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully creation goal',
                'data' => $goal
            ]
        );
    
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $matchID = $request->input('MatchID');
        $scoringPlayerID = $request->input('ScoringPlayerID');
        $assistingPlayerID = $request->input('AssistingPlayerID');
        $minute = $request->input('Minute');

        $goal = Goal::find($id);

       
        $goal->MatchID = $matchID;
        $goal->ScoringPlayerID = $scoringPlayerID;
        $goal->AssistingPlayerID = $assistingPlayerID;
        $goal->Minute = $minute;

        $goal->save();
        
        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully uploaded goal',
                'data' => $goal
            ]
        );

    }
    public function delete($id){
        $goal = Goal::find($id);
        $goal->delete();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully delete goal',
                'data' => $goal
            ]
        );
    }
}
