<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewTag extends Model
{
    protected $fillable = ['new_id', 'tag_id'];
    public $timestamps = false;
}
