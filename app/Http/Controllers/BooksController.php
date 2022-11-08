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
        // $choosenCategories = '';
        if($request->file('image')) 
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        
        
        $book = Book::where('slug', $slug)->first();
        $book->update($request->all());
        if($request->categories) {
            $book->CategoryBelongsToMany()->sync($request->categories);
        }

        return redirect('books')->with('status', 'Books update Successfully');
    }

    public function bookDelete($slug) {
        $book = Book::where('slug', $slug)->first();
        return view('book-delete', ['book' => $book]); 
    }

    public function destroy($slug) {
        $book = Book::where('slug', $slug)->first();
        $book->delete();
        return redirect('books')->with('status', 'book Deleted Successfully');
    }

    public function bookDeleted()
    {
        $deletedBook = Book::onlyTrashed()->get();
        return view('book-deleted', ['deletedBook' => $deletedBook]);
    }

    public function restore($slug)
    {

        $book = Book::withTrashed()->where('slug', $slug)->first();
        $book->restore();
        return redirect('books')->with('status', 'Book Restored Successfully');
      
    }
}
