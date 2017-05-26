<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $categories = Category::all();
        $data['categories'] = $categories;

        $articles = Article::orderBy('hits')->take(4)->get();
        $data['articles'] = $articles;

        $tags = Tag::all();
        $data['tags'] = $tags;

        return view('home', compact('data'));
    }
}
