<?php
namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Contracts\ArticleRepository;
use App\Article;

class ArticleRepositoryEloquent extends BaseRepository implements ArticleRepository
{
    public function model()
    {
        return Article::class;
    }

    public function createArticle($attributes)
    {
        $model = new $this->model;
        return $model->fill($attributes)->save();
    }

    public function all()
    {
        return $this->model->orderBy('created_at', 'desc')->get()->toArray();
    }
}

