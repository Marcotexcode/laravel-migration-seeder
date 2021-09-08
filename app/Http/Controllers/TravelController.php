<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TravelController extends Controller
{
    
   public function index() {

        $travels = Trip::all();

        return view('home', compact('travels'));

    }

}
