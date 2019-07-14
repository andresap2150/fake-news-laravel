<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Topic;

class News extends Model
{
    protected $fillable = ['title','content'];

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
