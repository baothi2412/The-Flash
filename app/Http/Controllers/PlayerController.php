<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(Request $request){
        return view('admin-pages.player.index',[
            'title'=>'Players'
        ]);
    }
}
