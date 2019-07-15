<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;
use App\User;

class Topic extends Model
{
    protected $fillable = [
        'TopicName'
    ];

    public function news(){
    	return $this->belongsToMany(News::class);
    }

    public function users(){
    	return $this->belongsToMany(User::class, 'user_topic');
    }
}
