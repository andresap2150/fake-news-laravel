<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\newsNotification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
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
        
        foreach($topics as $topic){
            $usersArray = $topic->users()->get();
            foreach ($usersArray as $tempUser) {
                Log::debug($tempUser);
                $tempUser->notify(new NewsNotification());
            }           
            
            //Notification::send($tempUser, new NewsNotification());
        }
         
            
        return Response::json($news);
    }

    public function show($id){
        return News::find($id);
    }
}
