<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = [
        'title', 'description', 'content', 'thumbnail', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}