<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request) {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->where('password', $password)->first();

        if (!is_null($user))
            return response()->json('success');

        return response()->json('fail');
    }
}
