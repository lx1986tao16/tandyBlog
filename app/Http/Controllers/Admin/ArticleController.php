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

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title'     => 'required|max:255',
        //     'author'    => 'required|max:255',
        //     'tags'      => 'required',
        //     'content'   => 'required', 
        // ]);

        
        

        // var_dump($request);exit;
    }
}
