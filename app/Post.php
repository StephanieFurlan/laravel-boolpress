<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'subtitle',
        'publication_date',
        'author',
        'content',
        'img_path'
    ];

    public function postInfo() {
        return $this->hasOne('App\PostInfo');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
