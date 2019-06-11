<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    //
    protected $fillable = [
        'user_id',
        'post'
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
