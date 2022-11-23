<?php

namespace App\Http\Controllers;

use App\Models\RentLog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RentLogsController extends Controller
{
    //
    public function index(Request $request) {


        // $request->session()->flush();

        $today = Carbon::now()->toDateString();

        // with relationship (user , book)
        $rentlogs = RentLog::with(['user', 'book'])->get();

        return view('rentlogs', ['rent_logs' => $rentlogs , 'today' => $today]);
    }
}
