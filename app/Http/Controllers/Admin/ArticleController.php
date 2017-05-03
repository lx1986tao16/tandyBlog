<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.articles.list');
    }

    public function create()
    {
        $categories = Category::all();
        
        return view('admin.articles.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        
    }
}
