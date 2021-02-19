<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'substitle',
        'publication_date',
        'author',
        'text'
    ];

    public function postInfo() {
        return $this->hasOne('App\PostInfo');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
