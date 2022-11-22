<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request){

        //pencarian berdasarkan kategory dan title
        $categories = Category::all();

        if ($request->title) {

            $books = Book::where('title', 'like', '%'.$request->title.'%')->get();

        } elseif($request->category) {
           $books = Book::whereHas('CategoryBelongsToMany', function($q) use($request) {
                $q->where('categories.id', $request->category);
            })
            ->get();
        }
        else {

            $books = Book::all();
        }
        return view('welcome', ['books' => $books,'categories' => $categories]);
    }
}
