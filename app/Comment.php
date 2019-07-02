<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id', 'post_id', 'comment'];
    public $timestamps = true;

    public function post(){
        return $this->belongsTo(Post::class, 'post_id','id');
    }
}
