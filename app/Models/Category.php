<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'name', 'parent_id', 'describe'
    ];


    public function children() {
        return $this->hasMany('App\Models\Category','parent_id','id') ;
    }

    public function parent(){
        return $this->belongsTo('App\Models\Category', 'parent_id', 'id');
    }
}
