<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $user = [
            "id" => auth()->id(),
            "name" => auth()->user()->name,
            "email" => auth()->user()->email
        ];
        return view('home', ['user'=>$user]);
    }
}
