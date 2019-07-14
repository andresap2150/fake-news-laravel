<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use Response;

class TopicsController extends Controller
{
    public function index(){
        return Topic::all();  
    }
}
