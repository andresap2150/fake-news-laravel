<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Response;

class NewsController extends Controller
{
    public function index(){
        return News::all();  
    }

    public function store(Request $request){
        $news = new News($request->all());
        $news -> save();
        return Response::json($news);
    }

    public function show($id){
        return News::find($id);
    }
}
