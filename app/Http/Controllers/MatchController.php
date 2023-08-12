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
   
    public function store(Request$request){
        $id = $request->input('id');
        $scoringPlayerID = $request->input('ScoringPlayerID');
        $DateTimeStart = $request->input('DateTimeStart');
        $dateTimeEnd = $request->input('DateTimeEnd');
        $stadium = $request->input('Stadium');
        $teamAID = $request->input('TeamAID');
        $teamAFormation = $request->input('TeamAFormation');
        $teamBID = $request->input('TeamBID');
        $teamBForScoremation = $request->input('TeamBForScoremation');
        $score = $request->input('Score');
        $type = $request->input('Type');

        $match = new MyMatch();
        
       
        $match->id = $id;
        $match->ScoringPlayerID = $scoringPlayerID;
        $match->DateTimeStart = $DateTimeStart;
        $match->DateTimeEnd = $dateTimeEnd;
        $match->Stadium = $stadium;
        $match->TeamAID = $teamAID;
        $match->TeamAFormation = $teamAFormation;
        $match->TeamBID = $teamBID;
        $match->TeamBForScoremation = $teamBForScoremation;
        $match->Score = $score;
        $match->Type = $type;
        

        $match->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully creation match',
                'data' => $match
            ]
        );
    
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $scoringPlayerID = $request->input('ScoringPlayerID');
        $DateTimeStart = $request->input('DateTimeStart');
        $dateTimeEnd = $request->input('DateTimeEnd');
        $stadium = $request->input('Stadium');
        $teamAID = $request->input('TeamAID');
        $teamAFormation = $request->input('TeamAFormation');
        $teamBID = $request->input('TeamBID');
        $teamBForScoremation = $request->input('TeamBForScoremation');
        $score = $request->input('Score');
        $type = $request->input('Type');

        $match = MyMatch::find($id);

       
        $match->ScoringPlayerID = $scoringPlayerID;
        $match->DateTimeStart = $DateTimeStart;
        $match->DateTimeEnd = $dateTimeEnd;
        $match->Stadium = $stadium;
        $match->TeamAID = $teamAID;
        $match->TeamAFormation = $teamAFormation;
        $match->TeamBID = $teamBID;
        $match->TeamBForScoremation = $teamBForScoremation;
        $match->Score = $score;
        $match->Type = $type;

        $match->save();
        
        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully uploaded match',
                'data' => $match
            ]
        );

    }
    public function delete($id){
        $match = MyMatch::find($id);
        $match->delete();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully delete match',
                'data' => $match
            ]
        );
    }
    public function detail($id) {
        $myMatch = MyMatch::find($id);

        return response()->json([
            'myMatch' => $myMatch
        ]);
    }

    public function matches() {
        // Lấy tất cả dữ liệu -> trả về mảng các dữ liệu
        $matchList = MyMatch::all();

        // return response()->json($matchList);

        return view(
            'client-pages.match-results.index',
            [
                'matchList' => $matchList
            ]
        );
    }

}
