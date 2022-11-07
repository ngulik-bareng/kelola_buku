<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
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
        $categories = Category::all();
        return view('book-add', ['categories' => $categories]);
    }

    public function store(Request $request) 
    {

        // dd($request->all());

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
        $book->CategoryBelongsToMany()->sync($request->categories);
        return redirect('books')->with('status', 'Books Added Successfully');
    }

    // edit
    public function edit($slug) {
        $book = Book::where('slug', $slug)->first();
        $categories = Category::all();
        return view('book-edit', ['categories' => $categories , 'book' => $book]);
    }

    // update
    public function update(Request $request, $slug) {
        $newName = '';
        if($request->file('image')) 
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }
    }
}
