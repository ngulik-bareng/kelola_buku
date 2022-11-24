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

        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
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


    public function returnBook() {
       
        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        // $books = Book::where('status', '=', 'In Stock')->get();
        $books = Book::all();
        return view('book-return', ['users' => $users, 'books' => $books]);
    }
    
    public function onReturn(Request $request) {
        // user & buku yang dipilih untuk direturn benar, maka berhasil return book
        // user & buku yang dipilih untuk direturn salah, maka muncul error notice

        $rent = RentLog::where('users_id', $request->users_id)->where('book_id', $request->book_id)
        ->where('actual_return_date',  null);

        $rentData = $rent->first();
        $countData = $rent->count();

        
        if($countData == 1) {
            //  return book
            $rentData->actual_return_date = Carbon::now()->toDateString();
       
          

            try {
                DB::beginTransaction();
                // proccess insert to rent_logs table
                // RentLog::create($request->all());
                // process update book table

                $rentData->actual_return_date = Carbon::now()->toDateString();
                $rentData->save();
                $book = Book::findOrFail($request->book_id);
                $book->status = 'In Stock';
                $book->save();
               
                DB::commit();

                Session::flash('message', 'The book is returned successfully');
                Session::flash('alert-class', 'alert-success');
                return redirect('book-return');
                //code...
            } catch (Throwable $th) {
                DB::rollBack();
                // dd($th);
            }

          
        }else {
            Session::flash('message', 'Cannot return, book has been returned');
            Session::flash('alert-class', 'alert-danger');
            return redirect('book-return');
        }

    }
}
