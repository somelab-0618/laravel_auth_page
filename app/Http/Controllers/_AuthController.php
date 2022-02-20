<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function login ()
    {
        return view('login');
    }

    public function signup ()
    {
        return view('signup');
    }

    public function resist(AuthRequest $request)
    {
        return redirect()->route('home')->with('username', $request->username);
    }

    public function home (Request $request)
    {
        $username = $request->session()->get('username');
        if (!$username) {
            return redirect()->route('signup');
        }
        return view('home', compact('username'));
    }
}
