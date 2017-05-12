<?php
namespace App\Service\Admin;

use App\Repositories\Eloquent\ArticleRepositoryEloquent;
use App\Service\Admin\BaseService;

class ArticleService extends BaseService
{
    private $article;

    public function __construct(ArticleRepositoryEloquent $article)
    {
        $this->article = $article;
    }
}
