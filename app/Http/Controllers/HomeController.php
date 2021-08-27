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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        if(auth()->user()->is_admin == 1){
//            return view('admin.dashboard');
//        }
//        if(auth()->user()->is_admin == 0){
//            return view('user.dashboard');
//        }
    }
}
