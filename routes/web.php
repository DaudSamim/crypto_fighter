<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


Route::get('test','\App\Http\Controllers\UserController@testing');
Route::get('testing','\App\Http\Controllers\UserController@testing');
Route::get('testings','\App\Http\Controllers\UserController@testings');


Route::middleware('guest')->group(function ()
{
    // Route::get('/', '\App\Http\Controllers\UserController@getLogin');
    Route::get('/', function ()
    {
        $coins = DB::table('coins')->orderBy('id','desc')->get();
        return view('index',compact('coins'));
    });
    Route::get('/login', '\App\Http\Controllers\UserController@getLogin')
        ->name('login');
    Route::post('/login', '\App\Http\Controllers\UserController@postLogin');
});

Route::middleware('auth:web')->group(function ()
{

    // Route::get('/home', '\App\Http\Controllers\HomeController@getHome');


    Route::get('/home', function ()
    {
        $coins = DB::table('coins')->get();
        return view('home',compact('coins'));
    });
    Route::get('/Add-coin', function ()
    {

        return view('add_coin');
    });
    Route::get('/change-password', function ()
    {

        return view('password');
    });
    Route::get('/logout', '\App\Http\Controllers\UserController@getLogout');

    Route::post('add_coin','\App\Http\Controllers\UserController@postAddCoin');

});



