<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
use App\Location;
use App\Tag;

use DB;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::with('tags')->get();
        return view('stories', ['stories' => $stories]);
    }

    public function create()
    {
    	$locations = Location::all();
    	return view('story.create', ['locations' => $locations]);
    }

    public function	store(Request $request) 
    {
		DB::table('stories')->insert([
		'location_id' => $request->input('location_id'),
		'title' => $request->input('title'),
		'story' => $request->input('story'),
		'published' => $request->input('published'),
		]);
    }	
}
