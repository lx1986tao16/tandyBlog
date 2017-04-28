<?php

namespace App;

use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use Taggable;

    protected $table = "tags";

    protected $fillable = [
        'name', 'describe'
    ];
}
