<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::with('user','category')->get();
        return view('articles.articles',compact('articles'));
        // return response()->json($articles);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){

        $image_name = time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->image->move(public_path('articles'), $image_name);
 

        Article::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'image'=> $image_name,
            'user_id' => auth()->user()->id,
            'category_id' => 1,
        ]);

        return "test";
    }

    


}
