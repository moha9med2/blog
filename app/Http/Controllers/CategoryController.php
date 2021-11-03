<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id){

        $category = Category::with('articles')->findOrFail($id);
        return view('categories.single',compact('category'));
    }
}
