<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoControlador extends Controller
{
    public function index($name = 'Ramiro')
    {
    	return view('welcome');
    }
}
