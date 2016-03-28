<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
use App\Tag;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::with('tags')->get();
        return view('stories', ['stories' => $stories]);
    }
}
