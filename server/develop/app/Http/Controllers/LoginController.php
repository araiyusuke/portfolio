<?php

namespace App\Http\Controllers;
ini_set('display_errors', "On");

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use \Symfony\Component\HttpFoundation\Response;
use App\User;

class LoginController extends Controller
{
    public function singin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::whereEmail($request->email)->first();

            $user->tokens()->delete();
            $token = $user->createToken("login:user{$user->id}")->plainTextToken;

            return response()->json(['token' => $token ], Response::HTTP_OK);
        }

        return response()->json('User Not Found.', Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function test1(Request $request) {
        $apple = $request->input('apple');
        $peach = $request->input('peach');

        return response()->json(['apple' => $apple . "これ", 'peach' => $peach . "っす"]);
    }
}
