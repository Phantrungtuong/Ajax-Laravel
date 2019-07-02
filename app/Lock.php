<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lock extends Model
{
    protected $table = 'locks';
    protected $fillable =['id', 'lock', 'key_id'];
    public $timestamps = true;

    public function key(){
        return $this->belongsTo(Key::class);
    }
}
