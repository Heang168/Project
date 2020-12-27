<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\b_LocationModel;

class b_LocationController extends Controller
{
    public function insertLocation(){

        return view('backend.insertLocation');
     }

    public function store(Request $request){
        $location = new b_LocationModel();

        $location->name = $request->input('name');
        $location->khmerprice = $request->input('khmerprice');
        $location->foriegnprice = $request->input('foriegnprice');       
        $location->estimate = $request->input('estimate');       
        $location->description = $request->input('description'); 
        $location->image = $request->input('image');
        $location->save();
        return view('backend.insertLocation')->with('location', $location);
     }




    public function DisplayLocation(){
        $data = b_LocationModel::orderBy('name','asc')->get();
        return view('frontend.location', ['data' => $data ]);
    }

}
