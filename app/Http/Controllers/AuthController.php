<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        
        if(!$user || !Hash::check($request->password, $user->password)){
            return response([
                'message' => ['Credentials doesn\'t match any records.']
            ], 401);
        }

        $token = $user->createToken('personal-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return response([
            'message' => ['Logged out.']
        ], 200);
    }
}
