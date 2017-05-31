<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private function get_article_count($category, &$article_count)
    {
        $children = $category->children;
        if (count($children)) {
            foreach ($children as $child) {
                $article_count = $article_count + count($child->articles);
                $this->get_article_count($child, $article_count);
            }
        }
        
        return $article_count;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles_total_count = 0;
        $categories = Category::all();
        foreach ($categories as &$category) {
            if ($category->parent_id == 0) {
                $articles_count = count($category->articles);
                $category->articles_count = $this->get_article_count($category, $articles_count);
                if ($category->articles_count > 0) {
                    $articles_total_count = $articles_total_count + $category->articles_count;
                }
            }
        }
        $data['articles_total_count'] = $articles_total_count;
        $data['categories'] = $categories;
        
        $hot_articles = Article::orderBy('hits')->take(4)->get();
        $data['hot_articles'] = $hot_articles;

        $rand_one_articles = Article::orderByRaw('RAND()')->take(4)->get();
        $rand_two_articles = Article::orderByRaw('RAND()')->take(4)->get();
        $data['random_one_articles'] = $rand_one_articles;
        $data['random_two_articles'] = $rand_two_articles;

        return view('home', compact('data'));
    }
}
