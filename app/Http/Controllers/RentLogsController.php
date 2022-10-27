<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentLogsController extends Controller
{
    //
    public function index(Request $request) {


        // $request->session()->flush();

        return view('rentlogs');
    }
}
