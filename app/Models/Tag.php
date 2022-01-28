<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['slug', 'name'];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}