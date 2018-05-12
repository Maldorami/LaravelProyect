<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
	public function directory()
	    {
	    	$actores = Actor::all();
	    	return view('actores')->with(compact('actores'));
	    }    

	    public function show($id)
	    {
	    	$actor = Actor::find($id);
	    	return view('actor')->with(compact('actor'));
	    }
}
