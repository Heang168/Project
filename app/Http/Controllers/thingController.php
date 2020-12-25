<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thingController extends Controller
{
    public function index(){

        return view('frontend.thing');
     }
}