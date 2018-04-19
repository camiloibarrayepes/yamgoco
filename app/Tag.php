<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'user_id', 'slug', 'name'
    ];

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
