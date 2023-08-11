<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User();

        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);

        $user->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully sign up account',
                'data' => $user
            ]
        );
    }
}
