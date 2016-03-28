<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use	App\Location;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::with('stories')->get();
        return view('locations', ['locations' => $locations]);
    }
}
