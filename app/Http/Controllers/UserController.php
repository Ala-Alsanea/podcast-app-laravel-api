<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    public function create()
    {
        return view('user.signin');
    }


    public function login()
    {
        return view('user.login');
    }

    public function logout(Request $request)
    {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return view('user.login');
    }



    public function store(Request $request)
    {

        $formField = $request->validate([
            'name'  => ['required', 'min:4'],
            'email'  => ['required', 'email', Rule::unique('users', 'email')],
            'password'  => ['required', 'confirmed', 'min:4', 'max:8',],
        ]);



        $formField['password'] = Hash::make($formField['password']);
        // $formField['password'] = bcrypt($formField['password']);

        // dd($formField);

        $user = User::create($formField);
        auth()->login($user);

        return redirect('/dashboard');
    }



    public function auth(Request $request)
    {

        $formField = $request->validate([
            'email'  => ['required', 'email'],
            'password'  => ['required',],
        ]);


        if (auth()->attempt($formField)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'invalid account']);
    }

    public function delete(int $id)
    {
        $user = User::find($id);
        // dd($user);
        $user->delete();
        return redirect('/signin');
    }
}