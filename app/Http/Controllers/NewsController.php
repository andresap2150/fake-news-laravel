<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\newsNotification;
use Illuminate\Database\Eloquent\Builder;
use App\News;
use App\Topic;
use App\User;
use Response;

class NewsController extends Controller
{
    public function index(){
        return News::all();  
    }

    public function store(Request $request){
        $temp = $request->all();
        unset($temp['topics']);
        $news = new News($temp);
        $topicsIdlist = $request->get('topics');

        $news -> save();

        $topics = Topic::find($topicsIdlist);
        $news -> topics()->attach($topics);
        
        $users = [];
        foreach($topics as $topic){
            array_push($users, $topic->users());
        }
        

        foreach ($users as $user) {
            $user->notify(new NewsNotification());
        }
        return Response::json($news);
    }

    public function show($id){
        return News::find($id);
    }
}
