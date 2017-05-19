<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use League\HTMLToMarkdown\HtmlConverter;
use Parsedown;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        foreach ($articles as &$article) {
            $article->category = Category::findOrFail($article->category_id)->name;

            $tags = [];
            $tags_arr = explode(',', $article->tag_id);
            foreach ($tags_arr as $tag_id) {
                $tag = Tag::findOrFail($tag_id);
                array_push($tags, $tag->name);
            }
            
            $article->tag = implode(',', $tags);
        }
        
        return view('admin.articles.list', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', ['categories' => $categories]);
    }

    public function store(ArticleRequest $request)
    {
        $Parsedown = new Parsedown();
        $result = Article::create([
            'title' => $request->input('title'),
            'author' => $request->input('author', 'Tandy'),
            'source' => $request->input('source'),
            'category_id' => intval($request->category_id),
            'tag_id' => $request->tag_id,
            'content' => $Parsedown->text($request->input('content'))
        ]);

        session()->flash('success', '发布成功');
        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $article->categories = Category::all();
        
        $tags_data = [];
        $tags_arr = explode(',', $article->tag_id);
        foreach ($tags_arr as $tag_id) {
            $tag = Tag::findOrFail($tag_id);
            array_push($tags_data, [
                'id' => $tag->id,
                'name' => $tag->name,
            ]);
        }

        $article->tags = json_encode($tags_data);

        $converter = new HtmlConverter();
        $content = $converter->convert($article->content);
        $article->content = $content;

        return view('admin.articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $Parsedown = new Parsedown();
        $data = [];
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'source' => $request->source,
            'category_id' => $request->category_id,
            'tag_id' => $request->tag_id,
            'content' => $Parsedown->text($request->content)
        ];

        $article->update($data);

        session()->flash('success', "更新成功");

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        session()->flash('success', '删除成功');

        return redirect()->back();
    }
}
