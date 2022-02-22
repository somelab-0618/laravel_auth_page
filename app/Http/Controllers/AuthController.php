<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthRequest $request)
    {
        $auth = $request->username;
        return redirect()->route('auth.show', compact('auth'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $auth
     * @return \Illuminate\Http\Response
     */
    public function show($auth)
    {
        $username = $auth;
        if (!$username) {
            return redirect()->route('auth/create');
        }
        return view('home', compact('username'));
    }
}
