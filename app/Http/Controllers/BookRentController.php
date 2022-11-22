<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Book;
use App\Models\User;
use App\Models\RentLog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookRentController extends Controller
{
    public function index() {

        $users = User::where('id', '!=', 1)->get();
        // $books = Book::where('status', '=', 'In Stock')->get();
        $books = Book::all();
        return view('book-rent', ['users' => $users, 'books' => $books]);
    }

    public function store(Request $request) {

        // set carbon
        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(3)->toDateString();
       
        $book = Book::findOrFail($request->book_id)->only('status');
        

        if($book['status'] != 'In Stock') {

            Session::flash('message', 'Cannot rent, book not available');
            Session::flash('alert-class', 'alert-danger');
            return redirect('book-rent');
        }
        else {
            
            $count = RentLog::where('users_id', $request->users_id)
            ->where('actual_return_date', null)->count();

            if($count >= 1) {
                Session::flash('message', 'Cannot rent, user has reach limit of rent book');
                Session::flash('alert-class', 'alert-danger');
                return redirect('book-rent');
            }
            
           
            try {
                DB::beginTransaction();
                // proccess insert to rent_logs table
                RentLog::create($request->all());
                // process update book table
                $book = Book::findOrFail($request->book_id);
                $book->status = 'not available';
                $book->save();
                DB::commit();

                Session::flash('message', 'Rent book success');
                Session::flash('alert-class', 'alert-success');
                return redirect('book-rent');
                //code...
            } catch (Throwable $th) {
                DB::rollBack();
                // dd($th);
            }

        }

    }
}
