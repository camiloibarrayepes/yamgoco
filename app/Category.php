<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'user_id', 'slug', 'body', 'name',
    ];

    public function posts(){
        return $this->HasMany(Post::class);
    }
}
