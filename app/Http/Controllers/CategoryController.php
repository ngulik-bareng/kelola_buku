<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index(Request $request) {


        // $request->session()->flush();

        $categories = Category::all();

        return view('category', ['categories' => $categories]);
    }

    public function add() {

        return view('category-add');

    }

    public function store(Request $request) {
       

        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category = Category::create($request->all());
        return redirect('category');
    }
}
