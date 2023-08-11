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

    // Load all user as html tr, td for tbody
    public function allUserAsHtml() {
        $users = User::all();
        $html = "";

        

        foreach ($users as $user) {
            $html .= '<tr role="row" class="even">
                        <td>
                                <td class="sorting_1">'.$user->id.'</td>
                                <td>'.$user->name.'</td>
                                <td>'.$user->email.'</td>
                                <a id="button-component" class="warning " data-toggle="modal" data-target=".launch-pricing-modal">
                                    <span class="text">
                                        <img style="position: relative; right: 0; top: 0;" class="svg-icon" src="/svg/basic-icons/Pencil.svg" alt="SVG Icon">
                                    </span>
                                </a>                                        
                                <a id="button-component" class="danger " data-toggle="modal" data-target=".launch-pricing-modal">
                                    <span class="text">
                                            <img style="position: relative; right: 0; top: 0;" class="svg-icon" src="/svg/basic-icons/Trash.svg" alt="SVG Icon">
                                    </span>
                                </a>                                    
                        </td>
                    </tr>';
        }

        return response($html)->header('Content-Type', 'text/html');
    }

}
