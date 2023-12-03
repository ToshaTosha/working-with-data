<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
}