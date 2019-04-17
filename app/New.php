<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'discription', 'status', 'author', 'image', 'category_id'];
    public $timestamps = false;

    public function categories()
    {
        return $this->belongTosMany('App\Category');
    }
    public function tags()
    {
        return $this->belongTosMany('App\Category');
    }
}
