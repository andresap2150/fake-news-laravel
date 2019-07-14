<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class Topic extends Model
{
    protected $fillable = [
        'TopicName'
    ];

    public function newsTopic(){
    	return $this->belongsToMany(News::class);
    }
}
