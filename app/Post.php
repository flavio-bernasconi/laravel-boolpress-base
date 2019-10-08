<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'text',
      'author'
    ];

    public function category() {

        return $this -> belongsTo(Post::class);
      }
}
