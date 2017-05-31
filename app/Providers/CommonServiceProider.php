<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class CommonServiceProider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts._nav', function($view){
            $categories = Category::all();
            $view->with('categories', $categories);
        });

        view()->composer('layouts._footer', function($view){
            $categories = Category::all();
            $view->with('categories', $categories);
        });

        view()->composer('shared.tags', function($view){
            $tags = Tag::all();
            $view->with('tags', $tags);
        });

        view()->composer('shared.new', function($view){
            $articles = Article::orderBy('created_at')->take(4)->get();
            $view->with('articles', $articles);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
