<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryNew extends Model
{
    protected $fillable = ['category_id', 'new_id'];
    public $timestamps = false;
}
