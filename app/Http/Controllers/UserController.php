<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request) {


        // $request->session()->flush();

        return view('user');
    }
    public function profile(Request $request) {

        return view('profile');
    }
}
