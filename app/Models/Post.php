<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'body',
        'photo', // add this line
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function likes()
    {
        // return $this->hasMany('App\Like');
    }
}
