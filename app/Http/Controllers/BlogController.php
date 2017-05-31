<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $data['category'] = $category;
        $articles = Article::where("category_id", $id)->orderBy('created_at', 'desc')->paginate(8);
        $data['articles'] = $articles;
        return view('blog', compact('data'));
    }
}