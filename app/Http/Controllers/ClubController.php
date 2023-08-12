<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;

class ClubController extends Controller
{
    public function index(Request $request)
    {
        $clubs = \DB::connection()->getSchemaBuilder()->getColumnListing((new Club)->getTable());
        $data = Club::all();
        return view('admin-pages.club.index', [
            'title' => 'Players',
            'records' => $data,
            'clubs' => $clubs,
            'fileColumnsName' => [
                'Logo'
            ]
        ]);
    }
    public function detail($id) {
        $club = Club::find($id);

        return response()->json([
            'club' => $club
        ]);
    }
    public function delete($id) {
        $clubs = Club::find($id);
        $clubs->delete();
        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully delete clubs account',
                'data' => $clubs
            ]
        );
    }
    public function update(Request $request):JsonResponse
    {

        $id = $request->input('id');
        $logo = $request->file('Logo');
        $clubName = $request->input('ClubName');
        $foundedYear = $request->input('FoundedYear');
        $stadium = $request->input('Stadium');
        $country = $request->input('Country');

        $club = Club::find($id);
        $imgName = 'img' . time() . '-' . Str::slug($clubName) . '.' . $logo->extension();
       
        $club->logo = $imgName;
        $club->clubName = $clubName;
        $club->foundedYear = $foundedYear;
        $club->stadium = $stadium;
        $club->country = $country;
        // Image upload
        Storage::delete(public_path('images\file-uploads') + $club->logo);
        $logo->move(public_path('images\file-uploads'), $imgName);

        $club->save();
        
        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully uploaded club',
                'data' => $club
            ]
        );

    }

   
    public function store(Request $request)
    {

    }
}