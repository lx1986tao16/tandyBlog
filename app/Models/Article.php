<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Article extends Model
{
    protected $table = "articles";

    protected $fillable = [
        'title', 'tag_id', 'category_id', 'content', 'hits', 'is_publish', 'author', 'source'
    ];

    
}
