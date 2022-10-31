<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(Request $request) {


        // $request->session()->flush();

        $categories = Category::all();

        return view('category', ['categories' => $categories]);
    }
}
