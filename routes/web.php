<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Coin;


Route::get('test','\App\Http\Controllers\UserController@testing');
Route::get('testing','\App\Http\Controllers\UserController@testing');
Route::get('testings','\App\Http\Controllers\UserController@testings');
Route::get('/filter-record','\App\Http\Controllers\UserController@filterRecord');


Route::middleware('guest')->group(function ()
{
    Route::get('asd',function(){
        $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, 'https://app.scrapingbee.com/api/v1/?api_key=58I5XPC2YS6ZA0KUT1ZZ5M35Z71RO0GXDYHYRZ65R5OGXS162HXZYBY7UVQB7QDL3BCD8OUYIULZAIC7&url=https%3A%2F%2Fbscscan.com%2Ftoken%2F0x0099b20ec0aee7d02117db07df12f9ce5e50fe8e');

    // set method
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // send the request and save response to $response
    $response = curl_exec($ch);

    // stop if fails
    if (!$response) {
      die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    }
    $result=[];

    libxml_use_internal_errors(true);
    $doc = new \DOMDocument();
    $doc->loadHTML($response);
    $xpath = new \DOMXPath($doc);
    $trans_name=$xpath->evaluate('//div[@id="ContentPlaceHolder1_trNoOfTxns"]//div[@class="row align-items-center"]//div[@class="col-md-4 mb-1 mb-md-0"]');

    $trans = $xpath->evaluate('//div[@class="col-md-8"]//span[@id="totaltxns"]');
    // dd($val);
     foreach ($trans as $key => $transfer) {

        //  echo $trans_name[$key]->textContent . $transfer->textContent;
         $result['transfer'] =$transfer->textContent;
    }
            echo "<pre>";
            print_r($result['transfer']);
             exit;
        curl_close($ch);
    });
    // Route::get('/', '\App\Http\Controllers\UserController@getLogin');
    Route::get('/', function ()
    {

        //$coins = DB::table('coins')->orderBy('id','desc')->limit(10)->get();

        $hours=request()->query('time');
        $newDateTime = Carbon::now()->subHours($hours);
        $liquidity=request()->query('liquidity');
        $holders=request()->query('holders');
        $owner=request()->query('owner');
        $sellers=request()->query('sellers');
        $code=request()->query('code');
        $twitter=request()->query('twitter');
        $web=request()->query('web');
        $telegram=request()->query('telegram');

        $query = Coin::query();
        if (request()->has('time') && $hours != null) {
            $query = $query->whereDate('created_at', '<', $newDateTime);

        }
        if (request()->has('liquidity') && $liquidity != null) {
            $price=explode('-',$liquidity);

            $min_liquid=$price[0];
            $max_liquid=$price[1];
            $query = $query->whereBetween('price', [$min_liquid, $max_liquid]);
            //  dd($query->get());
        }
        if (request()->has('holders') && $holders != null) {
            $hol=explode('-',$holders);

            $min_holders=$hol[0];
            $max_holders=$hol[1];
            $query = $query->whereBetween('holders', [$min_holders, $max_holders]);

        }
        if (request()->has('code')) {
            $query = $query->where('github', '!=', null);
        }
        // if (request()->has('owner')) {
        //     $query = $query->where('owner', '!=', null);
        // }
        // if (request()->has('seller')) {
        //     $query = $query->where('seller', '!=', null);
        // }
        if (request()->has('web')) {
            $query = $query->where('offical_site', '!=', null);
        }
        if (request()->has('telegram')) {
            $query = $query->where('telegram', '!=', null);
        }
        if (request()->has('twitter')) {
            $query = $query->where('twitter', '!=', null);
        }

        $coins = $query->orderBy('id','desc')->limit(10)->get();

        if(request()->query('page_no')){
            $skipper = (request()->query('page_no') - 1) * 10;
            // dd($skipper);
            $coins = DB::table('coins')->orderBy('id','desc')->skip($skipper)->take(10)->get();
        }

        $page_count = DB::table('coins')->orderBy('id','desc')->count() / 10 ;
        $end_page = floor($page_count);
        if($page_count > 25){
            $page_count = 25;
        }
        if(request()->has('time') || request()->has('liquidity') || request()->has('holders') || request()->has('code') || request()->has('web') || request()->has('telegram') || request()->has('twitter')){
            $page_count = 0;
        }
        return view('index',compact('coins','page_count','end_page'));
    });
    Route::get('/web', '\App\Http\Controllers\TestController@webscrap')
    ->name('web');
    Route::get('/login', '\App\Http\Controllers\UserController@getLogin')
        ->name('login');
    Route::post('/login', '\App\Http\Controllers\UserController@postLogin');
});
Route::get('/token','\App\Http\Controllers\UserController@searchtoken');
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



