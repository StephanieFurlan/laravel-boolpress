<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'post_id',
        'author',
        'comment_date',
        'content'
    ];

    public $timestamps = false;

    public function post() {
        return $this->belogsTo('App\Post');
    }
}
