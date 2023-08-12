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
                'message' => 'Successfully create account',
                'data' => $user
            ]
        );
    }

    public function update(Request $request) {
        $validatedData = $request->validate([
            'password' => 'required|min:8',
        ]);

        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = user::find($id);

        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);

        $user->save();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully update user account',
                'data' => $user
            ]
        );
    }

    public function detail($id) {
        $user = User::find($id);

        return response()->json([
            'user' => $user
        ]);
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();

        return response()->json(
            [
                'isSuccess' => true,
                'message' => 'Successfully delete user account',
                'data' => $user
            ]
        );
    }
}
