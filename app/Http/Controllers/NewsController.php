<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Topic;
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

        $news -> save();

        $topics = Topic::find($request->get('topics'));
        $news -> topics()->attach($topics);

        return Response::json($news);
    }

    public function show($id){
        return News::find($id);
    }
}
