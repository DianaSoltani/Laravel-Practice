<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => null]);
    }
    public function profile(User $user){
        return view('users.profile', compact('user'));
    }
}
