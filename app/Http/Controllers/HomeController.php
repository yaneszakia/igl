<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use auth;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return view('home');
       $user = Auth::user();
      // return view('home','user');
       return view('home')->with('users',$user);


    }
}
