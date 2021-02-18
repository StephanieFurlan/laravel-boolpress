<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostInfo extends Model
{
    //
    protected $fillable = [
        'post_id',
        'post_status',
        'comment_status',
        'content'
    ];
    protected $table = 'post_infos';
    public $timestamps = false;
}
