<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        
    }
}
