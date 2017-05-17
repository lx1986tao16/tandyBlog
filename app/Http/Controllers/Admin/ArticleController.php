<?php

namespace App\Http\Controllers\Admin;

use App\Tags;
use App\Article;
use App\Category;
use App\Service\Admin\ArticleServer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    private $article;

    public function __construct(ArticleService $article)
    {
        $this->article = $article;
    }

    public function index()
    {
        return view('admin.articles.list');
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', ['categories' => $categories]);
    }

    public function store(ArticleRequest $request)
    {
        

        
        

        // var_dump($request);exit;
    }
}
