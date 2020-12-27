<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThingModel;


class thingController extends Controller
{
    public function insertThing(){

        return view('backend.insertThing');
     }

     public function store(Request $request){
        $thing = new ThingModel();

        $thing->name = $request->input('name');
        $thing->description = $request->input('description');
        $thing->image = $request->input('image');
        $thing->save();
        return view('backend.insertThing')->with('thing', $thing);
     }




    public function DisplayThing(){
        $data = ThingModel::orderBy('name','asc')->get();
        return view('frontend.thing', ['data' => $data ]);
    }

}