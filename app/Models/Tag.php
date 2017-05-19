<?php

namespace App\Models;

use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Taggable;

    protected $table = "tags";

    protected $fillable = [
        'name', 'describe'
    ];
}
