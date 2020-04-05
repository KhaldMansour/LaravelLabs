<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =
    [
        'title',
        'description',
        'user_id',
        'slug',
        'img'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }
}
