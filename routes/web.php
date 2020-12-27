<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\http\Controllers\HomeController;
use App\http\Controllers\otherController;
use App\http\Controllers\contactController;
use App\http\Controllers\hotelController;
use App\http\Controllers\locationController;
use App\http\Controllers\restaurantController;
use App\http\Controllers\thingController;
use App\http\Controllers\testController;
use App\http\Controllers\b_LocationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// ----------Frontend-------------------

//home 
Route::get('/', [HomeController::class, 'index']);
//thing to do
Route::get('/thing', [thingController::class, 'DisplayThing']);
//location
Route::get('/location', [b_LocationController::class, 'DisplayLocation']);
//hotel
Route::get('/hotel', [hotelController::class, 'index']);
//restaurant
Route::get('/restaurant', [restaurantController::class, 'index']);
//other
Route::get('/other',[otherController::class, 'index']);
//booking
Route::get('/booking', function (){
    return view('frontend.booking');
});
//profile
Route::get('/profile', function (){
    return view('frontend.profile');
});
//contact us
Route::view('contact','frontend.contact');
Route::post('/contact', [contactController::class, 'index'])->name('contact');

  



// ----------Backend-------------------
//Location->insert data into location table
Route::get('/back-location', [b_LocationController::class, 'insertLocation']);
Route::post('/insertLocation', [b_LocationController::class, 'store'])->name('insertLocation');
//Thing-To-Do -> insert data into ThingToDo table
Route::get('/back-thing', [thingController::class, 'insertThing']);
Route::post('/insertThing', [thingController::class, 'store'])->name('insertThing');



