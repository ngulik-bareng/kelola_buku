<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    { 
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

    public function bookAdd(Request $request) 
    {
        return view('book-add');
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:255',
            'title' => 'required|max:255',
        ]);

        // upload gambar

        $newName = '';
        if($request->file('image')) 
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $book = Book::create($request->all());
        return redirect('books')->with('status', 'Books Added Successfully');
    }
}
