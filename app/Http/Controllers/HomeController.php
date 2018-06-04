<?php

namespace App\Http\Controllers;

use DB;
use App\Card;
use App\Http\Requests;
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
        //$this->middleware('admin'); //Uses the routeMiddleware called 'admin'

        //this is allow us to require auth on certain calls
        //$this->middleware('auth',['only' => 'index']);
        $this->middleware('auth',['except' => null]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();
        return view('home', compact('cards'));
    }
}
