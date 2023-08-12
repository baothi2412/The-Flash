<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Club;
use Illuminate\Support\Str;

class ClubController extends Controller
{
    public function index(Request $request) {
        $clubs =\DB::connection()->getSchemaBuilder()->getColumnListing((new Club)->getTable());
        $data = Club::all();
        return view('admin-pages.club.index', [
            'title' => 'Players',
            'records'=>$data,
            'clubs'=>$clubs,
            'fileColumnsName' => [
                'Logo'
            ],
            'imageColumns' => [
                'Logo'
            ],
        ]);
    }

    public function store(Request $request) : JsonResponse {
        $logo = $request->file('Logo');
        $clubName = $request->input('ClubName');
        $country = $request->input('Country');
        $foundedYear = $request->input('FoundedYear');
        $stadium = $request->input('Stadium');

        $club = new Club();

        // Image upload
        $imgName = 'img'.time().'-'.Str::slug($clubName).'.'.$logo->extension();

        $logo->move(public_path('images\file-uploads'), $imgName);

        $club->logo = $imgName;
        $club->clubName = $clubName;
        $club->country = $country;
        $club->foundedYear = $foundedYear;
        $club->stadium = $stadium;

        $club->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully creation',
                'data' => $club,
                'imageColumns' => [
                    'Logo'
                ]
            ]
        );
    }
}
