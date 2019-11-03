<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // telling laravel to not protect the data because it's safe
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
