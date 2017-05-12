<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ActionButtonAttributeTrait;

class Article extends Model
{
    use ActionButtonAttributeTrait;

    protected $table = "articles";

    protected $fillable = [
        'title', 'tags', 'category', 'content', 'hits', 'is_publish', 'author', 'source'
    ];
}
