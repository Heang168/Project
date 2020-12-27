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
use GuzzleHttp\Middleware;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact',[contactController::class, 'index']);

Route::get('/thing', [thingController::class, 'index']);

Route::get('/location', [locationController::class, 'index']);

Route::get('/hotel', [hotelController::class, 'index']);

Route::get('/restaurant', [restaurantController::class, 'index']);

Route::get('/other',[otherController::class, 'index']);

Route::get('/booking', function (){
    return view('frontend.booking');
});

Route::get('/profile', function (){
    return view('frontend.profile');
});

Route::get('/test', [testController::class, 'index'] ); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin panel
Route::group(['prefix' => 'admin', 'middleware'=>['auth']],function(){
    Route::get('/admin', function () {
        return view('admin.dashboard.index');
    });
    Route::get('/menu', function () {
        return view('admin.menu.menu');
    });
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
