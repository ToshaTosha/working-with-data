<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title'];

    public function genres()
    {
        return $this->belongsToMany('App\Models\Genre');
    }
}
