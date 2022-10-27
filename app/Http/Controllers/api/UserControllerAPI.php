<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserControllerAPI extends Controller
{
    //

    public function signin(Request $request)
    {
        $filed = $request->validate(
            [
                'username' => ['required', 'string', 'max:50'],
                'email' => ['required', 'string', 'max:50', 'email', Rule::unique('users', 'email')],
                'password' => ['required', 'string', 'max:50', 'min:8', 'confirmed'],

            ]
        );
        $filed['password'] = Hash::make($filed['password']);

        // add to DB
        $user = User::create($filed);

        // generate token
        $token = $user->createToken($user->email)->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 200);
    }



    public function login(Request $request)
    {
        $filed = $request->validate(
            [
                'email' => ['required', 'string', 'max:50', 'email'],
                'password' => ['required', 'string', 'max:50', 'min:8',],

            ]
        );

        // get user from database
        $user = User::where('email', $filed['email'])->first();


        if (Hash::check($filed['password'], $user->password)) {
            // generate token
            $token = $user->createToken($user->email)->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token,
            ];

            return response($response);
        }


        return [
            'message' => 'user not found'
        ];
    }



    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return ['message' => 'Logged out'];
    }
}