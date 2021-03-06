<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'text',
      'author',
      'category_id',
      'img'
    ];

    public function category() {

        return $this -> belongsTo(Post::class);
    }

    public function tags() {

        return $this -> belongsToMany(Tag::class);
    }
}
